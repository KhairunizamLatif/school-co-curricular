$(document).ready(function() {
    function compute() {
        var a = $('#a').val();
        var b = $('#b').val();
        var c = 18;
        var d = c-b;
        var total = (a/d)*50;
        $('#total').val(total);
    }

    $('#a, #b').change(compute);


        // cache the inputs and bind the events
        var $inputs = $(".checkbox")
        $inputs.on('change', function () {
            var sum = 0;
            $inputs.each(function() {
                // iterate and add it to sum only if checked
                if(this.checked)
                    sum += parseInt(this.value);
            });
            $("#km").val(sum);
        });

    $('.minus-button').click( (e) => {

        const currentInput = $(e.currentTarget).parent().prev()[0];

    let minusInputValue = $(currentInput).html();

    minusInputValue --;
    $(currentInput).html(minusInputValue);
});

    $('.plus-button').click( (e) => {

        const currentInput = $(e.currentTarget).parent().prev()[0];

    let plusInputValue = $(currentInput).html();

    plusInputValue ++;
    $(currentInput).html(plusInputValue);
});
});