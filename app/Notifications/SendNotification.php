<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class SendNotification extends Notification implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {

        return (new MailMessage)
            ->subject('Teste de envio')
            ->greeting('Prezado Usuário ')
            ->line('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus auctor felis vitae diam pellentesque, non sagittis justo rhoncus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam at porttitor sem. Vivamus tempus turpis turpis, in venenatis nibh efficitur eget. Donec molestie accumsan sem ac dapibus. Morbi varius eleifend augue, et egestas dui sagittis ut. Morbi eget vehicula nibh, eget tincidunt nisl. In nibh odio, dignissim sed placerat id, condimentum at diam. Sed et hendrerit dui, nec volutpat lorem. Sed vulputate lorem augue, sed rutrum velit mattis id. Ut at quam vel turpis sagittis pellentesque. Vestibulum viverra libero lorem.
                Curabitur vitae sollicitudin mi, non congue enim. Sed luctus erat iaculis mi dictum, at commodo urna consectetur. Aliquam tincidunt diam non mauris tempus, pharetra dapibus justo dictum. Proin ac aliquet neque. Fusce sollicitudin sapien tincidunt tempus gravida. Ut semper magna nisl, eu scelerisque massa pharetra et. Mauris ultricies ullamcorper scelerisque. In turpis ligula, tempus at est eu, lacinia maximus diam. Proin laoreet diam dolor, vitae consectetur enim pharetra ac. Pellentesque tristique nibh at magna ullamcorper, non malesuada justo lacinia. Aliquam placerat nec diam at efficitur. Nunc tincidunt risus feugiat dui placerat ornare. Nunc vel risus pellentesque, tincidunt leo eleifend, aliquet dolor. Praesent tellus ex, aliquet eget ante sed, eleifend tempus sem. Duis quis ullamcorper sem.
                Pellentesque rhoncus lacus diam, vitae viverra est convallis eu. Nunc vel nulla ac nisl pellentesque dictum id in enim. Nullam ipsum leo, dapibus at leo ut, accumsan lacinia nisi. Mauris sagittis tincidunt facilisis. Cras finibus mollis urna ac mollis. Duis mollis magna non est vehicula, ac gravida risus condimentum. Sed eleifend scelerisque pulvinar. Pellentesque vitae mi vel turpis aliquet pulvinar. Maecenas at odio fermentum, eleifend ante sed, cursus quam. In dapibus justo nibh, ac efficitur diam ultrices eget. Nulla porta diam tellus, nec iaculis purus volutpat aliquet. Mauris vel nisl enim. Sed molestie rhoncus diam non consequat. Etiam lobortis sapien quis leo aliquam eleifend. Vivamus scelerisque dapibus rutrum. Nullam sodales hendrerit massa a aliquet.
                Sed varius libero urna, eget dignissim odio rutrum id. Sed diam erat, pellentesque vel sodales ac, dignissim at lectus. Aliquam ultrices, dolor eu posuere aliquet, justo tortor dapibus tellus, quis mattis diam ex id tortor. Aliquam convallis cursus leo, ac varius nisi commodo eu. Proin viverra lectus risus, finibus cursus dolor maximus in. Duis id purus tincidunt, accumsan nisi id, rhoncus eros. Nullam interdum varius feugiat.
                Suspendisse suscipit lorem nunc, sed elementum metus convallis a. Nulla rutrum enim et sodales hendrerit. Vivamus a maximus lacus, eu commodo orci. Phasellus congue, nisi ut dignissim venenatis, diam risus placerat ante, nec gravida turpis eros gravida justo. Morbi varius vehicula elit eu varius. Cras urna ante, congue sed lorem tincidunt, tristique convallis sem. Vestibulum sed lorem in odio commodo pretium. In tempus dolor quis augue ornare, id gravida felis sagittis.
                Curabitur at enim est. Ut placerat sapien nec nisi euismod, at eleifend enim venenatis. Nullam lacinia, lorem id viverra venenatis, tellus eros vulputate libero, venenatis dignissim metus nisl eu lorem. Mauris rhoncus dictum mauris sed auctor. Vivamus porttitor tempus ullamcorper. Fusce maximus metus condimentum ante sollicitudin, ut ultricies erat blandit. Ut lobortis eros eget turpis malesuada, at consequat leo tristique. Integer fermentum lectus quam, nec sagittis quam consequat sit amet. Suspendisse eu nisi eget velit semper gravida eget et mauris. Duis venenatis hendrerit sollicitudin. Donec at euismod mauris. Curabitur at velit ut massa suscipit hendrerit sed vitae libero. Curabitur ac orci finibus, laoreet ante ut, dictum elit.
                Proin eget facilisis massa, sed luctus leo. Cras ac enim vel elit euismod aliquet a id lacus. Proin interdum consectetur mauris ac blandit. Nullam sit amet porttitor magna. Praesent dignissim ante a lectus mollis, eget luctus dolor scelerisque. Nunc ac erat sed arcu maximus interdum eget in nulla. Praesent ac lectus euismod, semper eros non, feugiat mauris. Maecenas in neque eget dolor imperdiet vestibulum sit amet at arcu. Suspendisse scelerisque mauris eget enim porttitor condimentum ac et enim. Quisque gravida sapien quis lectus tempor varius. Nam quis nibh sed sem vestibulum dignissim nec at odio.
                Nullam et viverra libero. Maecenas sit amet rutrum lectus, ac pretium nulla. Aliquam laoreet massa ut urna mollis aliquet. Nunc nec purus quis nisl imperdiet faucibus. Suspendisse potenti. Proin rhoncus quam quis metus porttitor, aliquet facilisis justo ullamcorper. Morbi vitae augue ante. Donec rutrum nunc metus, a feugiat purus congue a.
                Sed feugiat leo non velit malesuada porttitor. Maecenas sit amet scelerisque mauris. Aliquam vehicula tristique sapien, a tincidunt lorem fermentum et. Aenean placerat libero id pulvinar iaculis. Cras in cursus metus. Curabitur condimentum tincidunt risus. Etiam ex mi, iaculis eget posuere eu, dignissim nec augue. Integer ac tincidunt sapien, eget tincidunt lacus. Duis elementum massa non leo posuere consectetur. Etiam placerat bibendum velit, id consectetur diam porttitor non. Mauris fermentum lacus nulla, sit amet pharetra justo dictum id. Ut imperdiet vulputate ex. Donec sodales turpis sed condimentum posuere. Etiam sodales dui nunc, id euismod turpis sagittis ac.
                Integer lacinia malesuada sagittis. Praesent pretium ac elit at rutrum. Sed eget consequat tortor, vel ultricies ligula. Proin gravida eu felis et sodales. Morbi neque tortor, consequat eu erat consectetur, dapibus porttitor sapien. Quisque ullamcorper porta justo, sed blandit eros malesuada ac. Integer at urna vel velit pellentesque ultrices. Sed placerat vehicula dui ut vehicula. Phasellus dapibus, ante nec scelerisque elementum, arcu nibh malesuada felis, in lacinia ante nibh in nulla. Nunc vel molestie nulla. Nullam at ipsum id dui pulvinar fermentum. Pellentesque tincidunt ipsum in nulla congue, sed bibendum urna efficitur.')
            ->salutation('Obrigado!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }

    /**
     * Determine which queues should be used for each notification channel.
     *
     * @return array
     */
    public function viaQueues()
    {
        return [
            'mail' => 'emails',
        ];
    }
}
