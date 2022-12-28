let delete_buttons = document.querySelectorAll('button.delete_button');
// console.log(buttons);

delete_buttons.forEach(delete_button => { // like foreach($variables as $variable), you can name the name of $variable however you like.
    let id = delete_button.getAttribute('data-id');

    delete_button.addEventListener('click', function(){
        // prepare data form to send.
        // will be used for $_POST later in php file.
        let formData = new FormData();
        formData.append('id', id);
        formData.append('delete', 'delete');

        // send a request to backend.
        // line 17: first parameter is method, second parameter is url you want to send a request to to handle.
        let xhr = new XMLHttpRequest();
        xhr.open('POST', 'index.php?action=list');
        xhr.send(formData);

        xhr.addEventListener('readystatechange', function(){
            if(xhr.readyState == XMLHttpRequest.DONE){

                // get a reference to the row for the row
                // to erase a whole row, gave td a class 'place_row'.
                let row = delete_button.closest('.place_row');

                // delete the row.
                // deleting the actual data will be handeled in listController.php
                row.remove();
            }
        });
    });
})