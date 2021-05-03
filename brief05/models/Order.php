<?php


namespace app\models;


use app\core\Application;
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

    public function __construct(array $order)
    {
        $this->body = $order;
        $this->receipt = self::orderBreakdown($order);

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
            $v['rm_id'] = uniqid(rand(), true);

            $v['rm_total'] = $this->receipt['rooms'][$k]['total'];


            $r = new Room($v);
            /*            var_dump($r);
                        exit();*/

            $r->push();
        }

        return true;
    }
}