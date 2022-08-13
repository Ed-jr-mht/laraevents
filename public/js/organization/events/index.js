$(document).on('click', '.confirm-submit', function(event){
    event.preventDefault();

    const confirmation = confirm('Tu tem certeza que quer deletar essa parada?');

    if(confirmation){
        const form = $(this).parent();
        form.trigger('submit');
    }

});
