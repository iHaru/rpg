

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
                    var novaPosicao = dado + id;
                    $('#' + novaPosicao + ' div').addClass('atual');
                    setTimeout(() => {
                        $('#modal' + novaPosicao).modal('toggle');
                        $('#roll').removeClass('disabled');
                        setTimeout(() => {
                            editAttr(novaPosicao);
                        }, 500);
                    }, 500);
                    $('#roll').addClass('disabled');
                    $('#roll').attr('aria-disabled', 'true');
                })

                $('.hex:not(.invisible)').click(function() {
                    var id = Number($(this).children('.middle').attr('id'));
                    $('#modal' + id).modal('toggle');
                });

                $('.modal').on('show.bs.modal', function() {
                    var modalAberto = $(this).attr('id');
                    var modalAbertolength = modalAberto.length;
                    modalAberto = Number(modalAberto.slice(5, modalAbertolength));

                    var id = Number($('.atual').parents('div').attr("id"));

                    if (id != modalAberto) {
                        $('#modal' + modalAberto + ' .modal-footer .btn').addClass('disabled');
                    }
                })

                $('.modal').on('hide.bs.modal', function() {
                    $('.modal .modal-footer .btn').removeClass('disabled');
                })
            })

            function rollGold(posicao) {
                var dado = (Math.floor(Math.random() * 6)) + 1;
                console.log(dado);
                var antigogold = $("span:contains('GOLD')").text();
                var antigogoldlength = antigogold.length;
                antigogold = Number(antigogold.slice(7, antigogoldlength));

                var gold = Number($(posicao).attr('data-gold'));
                gold = antigogold + (dado * gold);

                $("span:contains('GOLD')").replaceWith('<span>GOLD = ' + gold+ '</span>');
            }

            function editAttr(posicao) {
                var posicao = posicao;

                var antigoatk = $("span:contains('ATK')").text();
                var antigoatklength = antigoatk.length;
                antigoatk = Number(antigoatk.slice(6, antigoatklength));

                var antigodef = $("span:contains('DEF')").text();;
                var antigodeflength = antigodef.length;
                antigodef = Number(antigodef.slice(6, antigodeflength));

                var atk = Number($('#' + posicao).attr('data-ataque'));
                var def = Number($('#' + posicao).attr('data-def'));

                if (atk != undefined && !isNaN(atk)) {
                    atk += antigoatk;
                    $("span:contains('ATK')").replaceWith('<span>ATK = ' + atk+ '</span>');
                }
                if (def != undefined && !isNaN(def)) {
                    def += antigodef;
                    $("span:contains('DEF')").replaceWith('<span>DEF = ' + def + '</span>');
                }
            }
        </script>
    </body>
</html>
