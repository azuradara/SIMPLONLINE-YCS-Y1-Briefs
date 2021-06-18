<?php

namespace app\controllers;

use DateTime;
use app\models\Slot;
use app\models\User;
use app\core\Request;
use app\models\Login;
use app\core\Response;
use app\core\Controller;
use app\core\Application;

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

            $arr = [
                "data" => ["date" => $date, "slots" => []],
                "err" => null
            ];

            $data = $arr["data"];

            foreach (self::SLOTS as $k => $v) {
                $data["slots"][$k] = [
                    "S" => $v["S"],
                    "E" => $v["E"],
                    "status" => 0,
                ];

                foreach ($slots as $slot) {
                    if ($slot["slt_timeslot"] == $k) {
                        $data["slots"][$k]["slt_id"] = $slot["slt_id"];
                        $data["slots"][$k]["status"] = 1;
                    }
                }
            }

            return $res->sendJSON($arr);
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
        $slot = new Slot();

        if ($req->isPOST()) {
            $slot->getData($req->getJSON());

            if ($slot->validate() && $slot->push()) {
                return $res->sendJSON(["slt_id" => $slot->slt_id, "slt_date" => $slot->slt_date, "slt_timeslot" => $slot->slt_timeslot]);
            }

            return $res->sendJSON($slot, 1);
        }
    }
}