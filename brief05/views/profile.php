<?php

use app\core\Application;
use app\models\components\Child;
use app\models\components\Room;
use app\models\OrderInvalidation;

$this->title = 'Profile';
$this->scripts = ['js/navbar.js'];

$ord = new OrderInvalidation();
$ords = $ord->fetchAll(['ord_usr_id' => Application::$app->session->get('user')]);
?>

<section>
    <?php

    if ($ords) {
        ?>
        <div class="container mx-auto max-w-6xl flex flex-row flex-wrap gap-12">
            <?php
            foreach ($ords as $o) {
                $rooms = Room::fetchAll(['rm_ord_id' => $o['ord_id']]);
                $children = Child::fetchAll(['ch_ord_id' => $o['ord_id']]);
//                var_dump($rooms)
                ?>

                <div class="bg-white max-w-lg shadow overflow-hidden sm:rounded-lg mx-auto w-full flex flex-col justify-between">
                    <div class="px-4 py-5 sm:px-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">
                            ORDER
                        </h3>
                        <p class="mt-1 max-w-2xl text-sm text-gray-500">
                            <?php echo "Placed at " . $o["ord_creation_date"]; ?>
                        </p>
                    </div>
                    <div class="border-t border-gray-200">
                        <dl>
                            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">
                                    Rooms
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    <?php
                                    foreach ($rooms as $r) {
                                        echo "$" . $r['rm_total'] . " / day</br>\n";
                                    }
                                    ?>
                                </dd>
                            </div>

                            <?php if($children): ?>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Children
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            <?php
                            foreach ($children as $c) {
                                echo "$" . $c['ch_total'] . " / day</br>\n";
                            }
                            ?>
                        </dd>
                    </div>
                <?php endif; ?>
                        </dl>
                    </div>
                    <div class="flex px-6 py-6 justify-between place-items-center">
                        <p class="text-gray-700 font-medium text-md">TOTAL</p>
                        <p class="text-gray-500 font-medium text-md"><?php echo '$' . $o['ord_total'] . ' / day'; ?></p>
                    </div>
                </div>

                <?php
            }
            ?>
        </div>
        <?php
    } else {
        ?>

        <div class="container text-center text-gray-400 text-3xl text-medium">You haven't made any reservations yet
            :(
        </div>
        <div class="lg:mt-0 lg:flex-shrink-0">
            <a href="/reservations"
               class="relative book_btn my-6 py-2 px-4 md:w-36 mx-auto flex justify-center items-center bg-yellow-500 hover:bg-yellow-600 focus:ring-yellow-500 focus:ring-offset-yellow-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-xl focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg">
                Get Started
            </a>
        </div>

        <?php
    }
    ?>
</section>