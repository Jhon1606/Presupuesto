<?php 

function create_flash_message(string $title, string $message, string $type): void
{
    $flash_message = ['title' => $title, 'message' => $message, 'type' => $type];
    $flash_message_format = format_flash_message($flash_message);
    // add the message to the session
    $_SESSION['FLASH_MESSAGES'] = $flash_message_format;
}

function format_flash_message(array $flash_message): string
{
    return sprintf(" <script> Swal.fire('%s','%s','%s'); </script>",
        $flash_message['title'],
        $flash_message['message'],
        $flash_message['type'],

    );
}
function show_flash_messages(){
    if(isset($_SESSION['FLASH_MESSAGES'])){ 
        echo $_SESSION['FLASH_MESSAGES']; 
        unset($_SESSION['FLASH_MESSAGES']);
    }  
}
?>