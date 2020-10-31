<?php
/**
 * Created by PhpStorm.
 * User: andyt
 * Date: 28.10.2020
 * Time: 11:59
 */

namespace App\Conversations;

use App\Category;
use App\User;
use BotMan\BotMan\Messages\Conversations\Conversation;
use DB;

use App\messengerUser as database;
use BotMan\BotMan\Messages\Attachments\Image;
use BotMan\BotMan\Messages\Incoming\Answer as BotManAnswer;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Outgoing\OutgoingMessage;
use BotMan\BotMan\Messages\Outgoing\Question as BotManQuestion;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;

class mainConversation extends conversation
{
    public $response = [];

    public function run()
    {
        $this->setName();
    }

    private function setName()
    {
        /* Step One*/
        $question = BotManQuestion::create("Вас приветствует чат-бот для удобного заказа электроники у оптового поставщика «Метреон». Чтобы пользоваться нашим чат-ботом, оставьте заявку и дождитесь ее подтверждения менеджером, который вас пригласил. Спасибо, что заказываете технику у нас");

        $question->addButtons([
            Button::create('Оставить заявку')->value(1),
        ]);

        $this->ask($question, function (BotManAnswer $answer) {

            if ($answer->getText() != '') {
                array_push($this->response, $answer->getText());

                $this->askWeather();

            }

        });
    }

    private function askWeather()
    {
        /* Step Two*/

        $question = BotManQuestion::create("Введите название контрагента");

        $this->ask($question, function (BotManAnswer $answer) {

            if ($answer->getText() != '') {
                array_push($this->response, $answer->getText());

                // $this->exit();
                $this->show_cat();
            }

        });

    }



    private function show_cat()
    {
        /* Step One*/
        $question = BotManQuestion::create("Виберите категорию");

        $category = DB::table('category')->get();
        foreach ($category as $cat) {

            $question->addButtons([
                Button::create($cat->title)->value($cat->id),
            ]);
        }

        $this->ask($question, function (BotManAnswer $answer) {

            if ($answer->getText() != '') {
                array_push($this->response, $answer->getText());

                $this->show_products($answer->getText());

            }

        });
    }


    private function show_products($id)
    {
        if ($id == 'report') {
            $this->show_cat();
        }

        $question = BotManQuestion::create("Виберите товар");

        $products = DB::table('products')->where('category_id', $id)->get();
        foreach ($products as $prod) {
            $question->addButtons([
                Button::create($prod->title)->value($prod->id),
            ]);
        }

        $question->addButtons([
            Button::create('Назад')->value('report'),
        ]);

        $this->ask($question, function (BotManAnswer $answer) {

            if ($answer->getText() != '') {
                array_push($this->response, $answer->getText());

                $this->defaultQuestion();

            }

        });
    }



    public function defaultQuestion()
    {
        // We first create our question and set the options and their values.
        $question = BotManQuestion::create('Huh - you woke me up. What do you need?')
            ->addButtons([
                Button::create('Random dog photo')->value('random'),
                Button::create('A photo by breed')->value('breed'),
                Button::create('A photo by sub-breed')->value('sub-breed'),
            ]);

        return $this->ask('How are you?', function (BotManAnswer $response) {
            $this->say('Cool - you said ' . $response->getText());
        });


 // $this->say('Cool - you said ');

        // We ask our user the question.
/*        return $this->ask($question, function (Answer $answer) {
            // Did the user click on an option or entered a text?
            if ($answer->isInteractiveMessageReply()) {
                // We compare the answer to our pre-defined ones and respond accordingly.
                switch ($answer->getValue()) {
                case 'random':
                    $this->say('111111');
                    break;
                    case 'breed':
                        $this->say('222222');
                        break;
                    case 'sub-breed':
                        $this->say('33333');
                        break;
                }
            }
        });*/
    }





    private function exit()
    {

        /* Step Three*/

        $db = new User();
//        $db->chat_id = $this->bot->getUser()->getId();
        $db->chat_id = 1111;
        $db->is_active = 0;
        $db->verify = 0;
        $db->first_name = $this->response[1];
        $db->status = $this->response[0];
        $db->save();


        $attachment = new Image('https://helpx.adobe.com/content/dam/help/en/stock/how-to/visual-reverse-image-search/jcr_content/main-pars/image/visual-reverse-image-search-v2_intro.jpg');

//        $question = BotManQuestion::create("Вас приветствует чат-бот для удобного заказа электроники у оптового поставщика «Метреон». Чтобы пользоваться нашим чат-ботом, оставьте заявку и дождитесь ее подтверждения менеджером, который вас пригласил. Спасибо, что заказываете технику у нас");
//
//        $question->addButtons([
//            Button::create('Оставить заявку')->value(1),
//        ]);

        $message = OutgoingMessage::create('До новых встреч!')
            ->withAttachment($attachment);
        $this->bot->reply($message);

        return true;
    }
}