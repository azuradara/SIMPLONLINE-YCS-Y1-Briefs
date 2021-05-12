<?php


namespace app\models;

use app\controllers\OrderController;
use app\core\Application;
use app\models\components\Child;
use app\models\components\Room;

class Order extends OrderInvalidation
{

    public string $ord_id = '';
    public string $ord_usr_id = '';
    public string $ord_rates_id = '';
    public float $ord_total = 0;
    public array|bool $receipt;
    public array $order = [];
    public array $body;

    public function __construct(array $order, array $receipt)
    {
        $this->body = $order;
        $this->receipt = $receipt;

        $this->ord_id = uniqid(rand(), true);
        $this->ord_usr_id = Application::$app?->user->usr_id;
        $this->ord_rates_id = $order['ratesId'];
        $this->ord_total = $this->receipt['total'];
    }

    //    public static function paraInit()
    //    {
    //        $c = new ReflectionClass(__CLASS__);
    //        return $c->newInstanceWithoutConstructor();
    //    }

    public function push(): bool
    {
        if ($this->receipt === false) return false;

        parent::push();

        foreach ($this->body['rooms'] as $k => $v) {
            $v['rm_ord_id'] = $this->ord_id;
            $v['rm_id'] = 'rm_' . uniqid(rand(), true);

            $v['rm_total'] = $this->receipt['rooms'][$k]['total'];


            $r = new Room($v);
            /*            var_dump($r);
                        exit();*/

            $r->push();
        }

        foreach ($this->body['children'] as $k => $v) {
            $v['ch_ord_id'] = $this->ord_id;
            $v['ch_id'] = 'ch_' . uniqid(rand(), true);

            $v['ch_total'] = $this->receipt['children'][$k]['total'];

            $c = new Child($v);

            $c->push();
        }

        return true;
    }
}