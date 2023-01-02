// delete using JavaScript
// prepare an array of all buttons with "a class" named delete_button. There can be only one id attribute to each element.
let delete_buttons = document.querySelectorAll('button.delete_button');

delete_buttons.forEach(delete_button => { // like foreach($variables as $variable), you can name the name of $variable however you like.
    let delete_id = delete_button.getAttribute('data-id');

    delete_button.addEventListener('click', function(){
        // prepare data form to send.
        // will be used for $_POST later in php file.
        let formData = new FormData();
        formData.append('id', delete_id);
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

// // edit content using JavaScript
// let edit_buttons = document.querySelectorAll('button.edit_button');

// edit_buttons.forEach(edit_button => {
//     let edit_id = edit_button.getAttribute('data-id');

//     edit_button.addEventListener('click', function(){
//         let formData = new FormData();
//         formData.append('id', edit_id);
//         formData.append('edit', 'edit');
    
//         let xhr = new XMLHttpRequest();
//         xhr.open('POST', 'index.php?action=edit');
//         xhr.send(formData);

//         xhr.addEventListener('readystatechange', function(){
//             if(xhr.readyState == XMLHttpRequest.DONE){
                
//             }
//         })
    
//     })
// })