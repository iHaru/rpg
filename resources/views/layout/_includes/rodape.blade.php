

        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js" integrity="sha384-yXOFkJyq6/vzPbuifPxEbwfurfDPO9+2O3UHh8QfQH8yZCdI/KoyHxxuOk2hwIVL" crossorigin="anonymous"></script>

        <script>
            $(document).ready(function () {
                $('#1 div').addClass('atual');

                $("#roll").click(function () {
                    var id = Number($('.atual').parents('div').attr("id"));
                    $('.atual').removeClass('atual');
                    var dado = (Math.floor(Math.random() * 6)) + 1;
                    var novaPosicao = 1 + id;
                    $('#' + novaPosicao + ' div').addClass('atual');
                    setTimeout(() => {
                        $('#modal' + novaPosicao).modal('toggle');
                        setTimeout(() => {
                            editAttr(novaPosicao);
                        }, 500);
                    }, 500);
                })

                $('.hex:not(.invisible)').click(function() {
                    var id = Number(jQuery(this).children('.middle').attr('id'));
                    $('#modal' + id).modal('toggle');
                });

                function editAttr(posicao) {
                    var posicao = posicao;

                    var antigoatk = $("span:contains('ATK')").text();
                    var antigoatklength = antigoatk.length;
                    antigoatk = Number(antigoatk.slice(6, antigoatklength));

                    var antigodef;
                    var antigogold;

                    var atk = Number($('#' + posicao).attr('data-ataque'));
                    atk += antigoatk;

                    var def = $('#' + posicao).attr('data-def');
                    var gold = $('#' + posicao).attr('data-gold');
                    if (atk != undefined) {
                    $("span:contains('ATK')").replaceWith('ATK = ' + atk);
                    }
                    if (def != undefined) {
                        $("span:contains('DEF')").replaceWith('DEF = ' + def);
                    }
                    if (gold != undefined) {
                        $("span:contains('GOLD')").replaceWith('GOLD = ' + gold);
                    }
                }
            })
        </script>
    </body>
</html>
