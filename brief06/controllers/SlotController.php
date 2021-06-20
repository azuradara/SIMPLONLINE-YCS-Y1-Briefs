<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;
use app\core\Response;
use app\models\Login;
use app\models\Slot;
use DateTime;

class SlotController extends Controller
{
    const SLOTS = [
        ["S" => "10:00:00", "E" => "10:30:00"],
        ["S" => "11:00:00", "E" => "11:30:00"],
        ["S" => "14:00:00", "E" => "14:30:00"],
        ["S" => "15:00:00", "E" => "15:30:00"],
        ["S" => "16:00:00", "E" => "16:30:00"],
    ];


    public function allSlots(Request $req, Response $res)
    {
        if ($req->isGet()) {
            $login = new Login();

            if (!$login->authenticate($req))
                return $res->sendJSON([], 'Unauthenticated.');

            if (!array_key_exists('date', $req->getReqBody()) || is_null($req->getReqBody()['date']))
                return $res->sendJSON([], 'Invalid date format.');

            $date = $req->getReqBody()['date'];

            $dt = DateTime::createFromFormat('Y-m-d', $date);
            if ($dt === false) {
                return $res->sendJSON([], "Invalid date format.");
            }

            $slots = Slot::fetchAll(['slt_date' => $date]);

            $data = ["date" => $date, "slots" => []];

            foreach (self::SLOTS as $k => $v) {
                $data["slots"][$k] = [
                    "S" => $v["S"],
                    "E" => $v["E"],
                    "slt_timeslot" => $k,
                    "status" => 0,
                ];

                foreach ($slots as $slot) {
                    if ($slot["slt_timeslot"] == $k) {
                        $data["slots"][$k]["slt_id"] = $slot["slt_id"];
                        $data["slots"][$k]["status"] = 1;
                    }
                }
            }


            return $res->sendJSON($data);
        }
    }

    public function userSlots(Request $req, Response $res)
    {
        $login = new Login();

        if (!$login->authenticate($req))
            return $res->sendJSON([], 'Unauthenticated.');

        $arr = [
            "data" => [],
            "err" => null
        ];

        $arr["data"] = Slot::fetchAll(['slt_usr_id' => Application::$app->user->usr_id]);

        return $res->sendJSON($arr);
    }

    public function saveSlot(Request $req, Response $res)
    {
        $login = new Login();

        if (!$login->authenticate($req))
            return $res->sendJSON([], 'Unauthenticated.');

        $slot = new Slot();

        if ($req->isPOST()) {
            $slot->getData($req->getJSON());

            $slotExists = Slot::fetchOne([
                "slt_date" => $slot->slt_date,
                "slt_timeslot" => $slot->slt_timeslot
            ]);


            if ($slotExists) return $res->sendJSON([], "Slot already reserved.");

            if ($slot->validate() && $slot->push()) {
                return $res->sendJSON([
                    "slt_id" => $slot->slt_id,
                    "slt_date" => $slot->slt_date,
                    "slt_timeslot" => $slot->slt_timeslot,
                    "slt_sub" => $slot->slt_sub,
                    "slt_desc" => $slot->slt_desc,
                ]);
            }

            return $res->sendJSON($slot);
        }
    }

    public function deleteSlot(Request $req, Response $res)
    {
        $login = new Login();

        if (!$login->authenticate($req))
            return $res->sendJSON([], 'Unauthenticated.');

        if ($req->isDELETE()) {
            $slot = $req->getJSON();

            $slotExists = Slot::fetchOne(["slt_id" => $slot->slt_id]);

            if (!($slotExists && $slotExists->slt_isactive)) return $res->sendJSON([], "Slot doesn't exist.");

            $slt_date = DateTime::createFromFormat('Y-m-d', $slotExists->slt_date);
            $now = new DateTime();

            if ($slt_date < $now) return $res->sendJSON([], 'Cannot mutate past timeslots.');

            if (Slot::destroyOne(["slt_id" => $slot->slt_id])) {
                return $res->sendJSON("Slot deleted successfully.");
            }
        }
    }
}