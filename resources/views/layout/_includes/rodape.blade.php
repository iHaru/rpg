

        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js" integrity="sha384-yXOFkJyq6/vzPbuifPxEbwfurfDPO9+2O3UHh8QfQH8yZCdI/KoyHxxuOk2hwIVL" crossorigin="anonymous"></script>

        <script>
            $(document).ready(function () {
                var iniciacao = null; //PLAYER = 1 | NPC = 0

                $("#roll").click(function () {
                    var id = Number($('.atual').parents('div').attr("id"));
                    $('.atual').removeClass('atual');
                    var dado = rollDado();
                    var novaPosicao = 2 + id;
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
                        $('#modal' + modalAberto + ' .modal-footer .btn').attr('disabled', 'true');
                    }
                })

                $('.modal').on('hide.bs.modal', function() {
                    $('.modal .modal-footer .btn').removeAttr('disabled');
                })
            })

            function attrAtual() {
                var atributos = new Object();

                var antigoatk = $("a span:contains('ATK')").text();
                var antigoatklength = antigoatk.length;
                antigoatk = Number(antigoatk.slice(6, antigoatklength));
                atributos.atk = antigoatk;

                var antigodef = $("a span:contains('DEF')").text();
                var antigodeflength = antigodef.length;
                antigodef = Number(antigodef.slice(6, antigodeflength));
                atributos.def = antigodef;

                var antigohp = $("a span:contains('HP')").text();
                var antigohplength = antigohp.length;
                antigohp = Number(antigohp.slice(5, antigohplength));
                atributos.hp = antigohp;


                var antigogold = $("a span:contains('GOLD')").text();
                var antigogoldlength = antigogold.length;
                antigogold = Number(antigogold.slice(7, antigogoldlength));
                atributos.gold = antigogold;

                return atributos;
            }

            function rollGold(posicao) {
                var dado = rollDado();
                var atributos = attrAtual();

                var antigogold = atributos.gold;

                var gold = Number($(posicao).attr('data-gold'));
                gold = antigogold + (dado * gold);

                $("a span:contains('GOLD')").replaceWith('<span>GOLD = ' + gold + '</span>');
            }

            function editAttr(posicao) {
                var posicao = posicao;
                var atributos = attrAtual();

                var antigoatk = atributos.atk;
                var antigodef = atributos.def;

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

            function rollDado() {
                var dado = (Math.floor(Math.random() * 6)) + 1;

                return dado;
            }

            function atacar(elemento) {
                var atkInimigo = Number($(elemento).parents('div.modal').attr('data-ataque'));
                var defInimigo = Number($(elemento).parents('div.modal').attr('data-def'));
                var hpInimigo = Number($(elemento).parents('div.modal').attr('data-hp'));

                atributos = attrAtual();

                if (iniciacao == 0) {
                    var danoInimigo = (rollDado() + atkInimigo) - atributos.def;
                    atributos.hp = atributos.hp - danoInimigo;
                    $(elemento).parents('div.modal').find('.modal-body p#relatorio').append('<br> Você recebeu ' + danoInimigo + ' de dano!')

                    $("a span:contains('HP')").replaceWith('<span>HP = ' + atributos.hp + '</span>');

                    iniciacao = 1;
                } else {
                    var danoPlayer = (rollDado() + atributos.atk) - defInimigo;
                    hpInimigo = hpInimigo - danoPlayer;
                    $(elemento).parents('div.modal').find('.modal-body p span').replaceWith('<span>HP = ' + hpInimigo + '</span>');
                    $(elemento).parents('div.modal').attr('data-hp', hpInimigo);
                    $(elemento).parents('div.modal').find('.modal-body p#relatorio').append('<br> Você deu ' + danoPlayer + ' de dano!')

                    if (hpInimigo == 0 || hpInimigo < 0) {
                        $(elemento).parents('div.modal').find('.modal-body #stats').replaceWith('<p>Você derrotou!</p>');
                        $(elemento).attr('disabled', 'true');
                        $(elemento).next().attr('disabled', 'true');
                    }

                    iniciacao = 0;
                    //atacar(elemento);
                }

                console.log(iniciacao, danoPlayer, danoInimigo);
            }

            function fugir() {
                var atributos = attrAtual();
                var gold = atributos.gold - (rollDado() * 2);

                if (gold < 0) {
                    gold = 0;
                    $("a span:contains('GOLD')").replaceWith('<span>GOLD = ' + gold + '</span>');

                } else {
                    $("a span:contains('GOLD')").replaceWith('<span>GOLD = ' + gold + '</span>');
                }

            }

            function initiate(btn) {
                do {
                    var player = rollDado();
                    var npc = rollDado();

                    if (player > npc) {
                        iniciacao = 1;
                    } else if (npc > player) {
                        iniciacao = 0;
                    }
                } while (player == npc);

                $(btn).parents('div.modal').find('.modal-body p#relatorio').append('<br> Você tirou ' + player + ' no dado!')
                $(btn).parents('div.modal').find('.modal-body p#relatorio').append('<br> Seu inimigo tirou ' + npc + ' no dado!')
                if (player > npc) {
                    $(btn).parents('div.modal').find('.modal-body p#relatorio').append('<br> <b>O primeiro turno é seu!</b><br>');
                } else {
                    $(btn).parents('div.modal').find('.modal-body p#relatorio').append('<br> <b>O primeiro turno é do seu inimigo!</b><br>');
                }
                $(btn).addClass('invisible');
                $(btn).next().removeAttr('hidden');

            }
        </script>
    </body>
</html>
