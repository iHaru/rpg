@extends('layout.site')

@section('titulo', 'Odonto')
@section('conteudo')
<div class="container">

    <!-- CAMINHO -->

    <div class="hex-row">
        <div class="hex">
            <div class="left"></div>
            <div class="middle" id="1"><div class="atual"></div></div>
            <div class="right"></div>
        </div>
        <div class="hex">
            <div class="left"></div>
            <div class="middle" id="2" data-ataque="3"><div></div></div>
            <div class="right"></div>
        </div>
        <div class="hex invisible">
            <div class="left"></div>
            <div class="middle"></div>
            <div class="right"></div>
        </div>
        <div class="hex invisible">
            <div class="left"></div>
            <div class="middle"></div>
            <div class="right"></div>
        </div>
    </div>

    <div class="hex-row">
        <div class="hex invisible">
            <div class="left"></div>
            <div class="middle"></div>
            <div class="right"></div>
        </div>
        <div class="hex">
            <div class="left"></div>
            <div class="middle" id="3"><div></div></div>
            <div class="right"></div>
        </div>
        <div class="hex invisible">
            <div class="left"></div>
            <div class="middle"></div>
            <div class="right"></div>
        </div>
        <div class="hex invisible">
            <div class="left"></div>
            <div class="middle"></div>
            <div class="right"></div>
        </div>
    </div>

    <div class="hex-row">
        <div class="hex invisible">
            <div class="left"></div>
            <div class="middle"></div>
            <div class="right"></div>
        </div>
        <div class="hex invisible">
            <div class="left"></div>
            <div class="middle"></div>
            <div class="right"></div>
        </div>
        <div class="hex">
            <div class="left"></div>
            <div class="middle" id="4"><div></div></div>
            <div class="right"></div>
        </div>
        <div class="hex">
            <div class="left"></div>
            <div class="middle" id="5"><div></div></div>
            <div class="right"></div>
        </div>
    </div>

    <div class="hex-row">
        <div class="hex invisible">
            <div class="left"></div>
            <div class="middle"></div>
            <div class="right"></div>
        </div>
        <div class="hex invisible">
            <div class="left"></div>
            <div class="middle"></div>
            <div class="right"></div>
        </div>
        <div class="hex invisible">
            <div class="left"></div>
            <div class="middle"></div>
            <div class="right"></div>
        </div>
        <div class="hex">
            <div class="left"></div>
            <div class="middle" id="6"><div></div></div>
            <div class="right"></div>
        </div>
    </div>

    <div class="hex-row">
        <div class="hex invisible">
            <div class="left"></div>
            <div class="middle"></div>
            <div class="right"></div>
        </div>
        <div class="hex">
            <div class="left"></div>
            <div class="middle" id="8"><div></div></div>
            <div class="right"></div>
        </div>
        <div class="hex">
            <div class="left"></div>
            <div class="middle" id="7"><div></div></div>
            <div class="right"></div>
        </div>
        <div class="hex invisible">
            <div class="left"></div>
            <div class="middle"></div>
            <div class="right"></div>
        </div>
    </div>

    <div class="hex-row">
        <div class="hex">
            <div class="left"></div>
            <div class="middle" id="9" data-def="3"><div></div></div>
            <div class="right"></div>
        </div>
        <div class="hex invisible">
            <div class="left"></div>
            <div class="middle"></div>
            <div class="right"></div>
        </div>
        <div class="hex invisible">
            <div class="left"></div>
            <div class="middle"></div>
            <div class="right"></div>
        </div>
        <div class="hex invisible">
            <div class="left"></div>
            <div class="middle"></div>
            <div class="right"></div>
        </div>
    </div>

    <div class="hex-row">
        <div class="hex">
            <div class="left"></div>
            <div class="middle" id="10"><div></div></div>
            <div class="right"></div>
        </div>
        <div class="hex">
            <div class="left"></div>
            <div class="middle" id="11"><div></div></div>
            <div class="right"></div>
        </div>
        <div class="hex">
            <div class="left"></div>
            <div class="middle" id="12"><div></div></div>
            <div class="right"></div>
        </div>
        <div class="hex">
            <div class="left"></div>
            <div class="middle" id="13"><div></div></div>
            <div class="right"></div>
        </div>
    </div>

    <div class="hex-row">
        <div class="hex invisible">
            <div class="left"></div>
            <div class="middle"></div>
            <div class="right"></div>
        </div>
        <div class="hex invisible">
            <div class="left"></div>
            <div class="middle"></div>
            <div class="right"></div>
        </div>
        <div class="hex invisible">
            <div class="left"></div>
            <div class="middle"></div>
            <div class="right"></div>
        </div>
        <div class="hex">
            <div class="left"></div>
            <div class="middle" id="14"><div></div></div>
            <div class="right"></div>
        </div>
    </div>

    <div class="hex-row">
        <div class="hex invisible">
            <div class="left"></div>
            <div class="middle"></div>
            <div class="right"></div>
        </div>
        <div class="hex">
            <div class="left"></div>
            <div class="middle" id="16"><div></div></div>
            <div class="right"></div>
        </div>
        <div class="hex">
            <div class="left"></div>
            <div class="middle" id="15"><div></div></div>
            <div class="right"></div>
        </div>
        <div class="hex invisible">
            <div class="left"></div>
            <div class="middle"></div>
            <div class="right"></div>
        </div>
    </div>

    <div class="hex-row">
        <div class="hex">
            <div class="left"></div>
            <div class="middle" id="17"><div></div></div>
            <div class="right"></div>
        </div>
        <div class="hex invisible">
            <div class="left"></div>
            <div class="middle"></div>
            <div class="right"></div>
        </div>
        <div class="hex invisible">
            <div class="left"></div>
            <div class="middle"></div>
            <div class="right"></div>
        </div>
        <div class="hex invisible">
            <div class="left"></div>
            <div class="middle"></div>
            <div class="right"></div>
        </div>
    </div>

    <div class="hex-row">
        <div class="hex">
            <div class="left"></div>
            <div class="middle" id="18"><div></div></div>
            <div class="right"></div>
        </div>
        <div class="hex">
            <div class="left"></div>
            <div class="middle" id="19" data-def="3"><div></div></div>
            <div class="right"></div>
        </div>
        <div class="hex invisible">
            <div class="left"></div>
            <div class="middle"></div>
            <div class="right"></div>
        </div>
        <div class="hex invisible">
            <div class="left"></div>
            <div class="middle"></div>
            <div class="right"></div>
        </div>
    </div>

    <div class="hex-row">
        <div class="hex invisible">
            <div class="left"></div>
            <div class="middle"></div>
            <div class="right"></div>
        </div>
        <div class="hex">
            <div class="left"></div>
            <div class="middle" id="20"><div></div></div>
            <div class="right"></div>
        </div>
        <div class="hex invisible">
            <div class="left"></div>
            <div class="middle"></div>
            <div class="right"></div>
        </div>
        <div class="hex invisible">
            <div class="left"></div>
            <div class="middle"></div>
            <div class="right"></div>
        </div>
    </div>

    <div class="hex-row">
        <div class="hex invisible">
            <div class="left"></div>
            <div class="middle"></div>
            <div class="right"></div>
        </div>
        <div class="hex invisible">
            <div class="left"></div>
            <div class="middle"></div>
            <div class="right"></div>
        </div>
        <div class="hex">
            <div class="left"></div>
            <div class="middle" id="21"><div></div></div>
            <div class="right"></div>
        </div>
        <div class="hex">
            <div class="left"></div>
            <div class="middle" id="22"><div></div></div>
            <div class="right"></div>
        </div>
    </div>

    <div class="hex-row">
        <div class="hex invisible">
            <div class="left"></div>
            <div class="middle"></div>
            <div class="right"></div>
        </div>
        <div class="hex invisible">
            <div class="left"></div>
            <div class="middle"></div>
            <div class="right"></div>
        </div>
        <div class="hex invisible">
            <div class="left"></div>
            <div class="middle"></div>
            <div class="right"></div>
        </div>
        <div class="hex">
            <div class="left"></div>
            <div class="middle" id="23"><div></div></div>
            <div class="right"></div>
        </div>
    </div>

    <div class="hex-row">
        <div class="hex invisible">
            <div class="left"></div>
            <div class="middle"></div>
            <div class="right"></div>
        </div>
        <div class="hex">
            <div class="left"></div>
            <div class="middle" id="25"><div></div></div>
            <div class="right"></div>
        </div>
        <div class="hex">
            <div class="left"></div>
            <div class="middle" id="24"><div></div></div>
            <div class="right"></div>
        </div>
        <div class="hex invisible">
            <div class="left"></div>
            <div class="middle"></div>
            <div class="right"></div>
        </div>
    </div>

    <div class="hex-row">
        <div class="hex invisible">
            <div class="left"></div>
            <div class="middle"></div>
            <div class="right"></div>
        </div>
        <div class="hex">
            <div class="left"></div>
            <div class="middle" id="26"><div></div></div>
            <div class="right"></div>
        </div>
        <div class="hex invisible">
            <div class="left"></div>
            <div class="middle"></div>
            <div class="right"></div>
        </div>
        <div class="hex invisible">
            <div class="left"></div>
            <div class="middle"></div>
            <div class="right"></div>
        </div>
    </div>

    <!-- DIALOGO -->

    <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal1">TITULO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                lorem ipsum
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary">escolha 1</button>
                <button type="button" class="btn btn-primary">escolha 2</button>
            </div>
          </div>
        </div>
    </div>

    <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal1">TITULO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Parece que um aventureiro apressado deixou sua espada cair.

                <p>+3 de Ataque.</p>
            </div>
          </div>
        </div>
    </div>

    <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-hidden="true" data-hp="10" data-ataque="1" data-def="1">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal1">TITULO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Um estranho goblin aparece no seu caminho</p>

                <p id="stats"><span>HP = 10</span> | DEF = 1 | ATK = 1</p>

                <p id="relatorio">--RELATORIO DE COMBATE--</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" onclick="initiate(this)">COMEÇAR BATALHA</button>
                <button type="button" class="btn btn-secondary" onclick="atacar(this)" hidden>ATACAR</button>
                <button type="button" class="btn btn-primary" onclick="fugir()">FUGIR</button>
            </div>
          </div>
        </div>
    </div>

    <div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal1">TITULO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Você tropeçou em um tronco de árvore, machucando seu tornozelo.</p>
                <p>Só consegue andar metade do valor do dado por 2 dias.</p>
            </div>
          </div>
        </div>
    </div>

    <div class="modal fade" id="modal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal1">TITULO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Você ve uma bolsa à esquerda da estrada.</p>
                <p>Pode conter algum ouro.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" onclick="rollGold(this)" data-gold="6">Rolar o dado</button>
            </div>
          </div>
        </div>
    </div>

    <div class="modal fade" id="modal6" tabindex="-1" role="dialog" aria-hidden="true"  data-hp="25" data-ataque="3" data-def="1">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal1">TITULO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    Entre as árvores, você vê uma pequena criatura, parecida com uma fada, flutuando e olhando diretamente seus olhos.
                    <br> Se você pegou alguma coisa nessa floresta, eu vou matar você.
                </p>

                <p id="stats"><span>HP = 25</span> | DEF = 1 | ATK = 3</p>

                <p id="relatorio">--RELATORIO DE COMBATE--</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" onclick="initiate(this)">COMEÇAR BATALHA</button>
                <button type="button" class="btn btn-secondary" onclick="atacar(this)" hidden>ATACAR</button>
                <button type="button" class="btn btn-primary" onclick="fugir()">FUGIR</button>
            </div>
          </div>
        </div>
    </div>

    <div class="modal fade" id="modal7" tabindex="-1" role="dialog" aria-hidden="true" data-nome="Cálice da floresta">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal1">TITULO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p><h4>Uso único <br> Cura 100% da sua vida</h4></p>
                <p>Lendas contam que basta um gole da água do sagrado cálice para curar todas suas feridas, já que o cálice contém
                    a essência de toda a vida da foresta.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" onclick="addArtefato(this)">Pegar</button>
            </div>
          </div>
        </div>
    </div>

    <div class="modal fade" id="modal8" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal1">TITULO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                lorem ipsum
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary">escolha 1</button>
                <button type="button" class="btn btn-primary">escolha 2</button>
            </div>
          </div>
        </div>
    </div>

    <div class="modal fade" id="modal9" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal1">TITULO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                lorem ipsum
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary">escolha 1</button>
                <button type="button" class="btn btn-primary">escolha 2</button>
            </div>
          </div>
        </div>
    </div>

    <div class="modal fade" id="modal10" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal1">TITULO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                lorem ipsum
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary">escolha 1</button>
                <button type="button" class="btn btn-primary">escolha 2</button>
            </div>
          </div>
        </div>
    </div>

    <div class="modal fade" id="modal11" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal1">TITULO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                lorem ipsum
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary">escolha 1</button>
                <button type="button" class="btn btn-primary">escolha 2</button>
            </div>
          </div>
        </div>
    </div>

    <div class="modal fade" id="modal12" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal1">TITULO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                lorem ipsum
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary">escolha 1</button>
                <button type="button" class="btn btn-primary">escolha 2</button>
            </div>
          </div>
        </div>
    </div>

    <div class="modal fade" id="modal13" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal1">TITULO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                lorem ipsum
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary">escolha 1</button>
                <button type="button" class="btn btn-primary">escolha 2</button>
            </div>
          </div>
        </div>
    </div>

    <div class="modal fade" id="modal14" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal1">TITULO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                lorem ipsum
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary">escolha 1</button>
                <button type="button" class="btn btn-primary">escolha 2</button>
            </div>
          </div>
        </div>
    </div>

    <div class="modal fade" id="modal15" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal1">TITULO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                lorem ipsum
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary">escolha 1</button>
                <button type="button" class="btn btn-primary">escolha 2</button>
            </div>
          </div>
        </div>
    </div>

    <div class="modal fade" id="modal16" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal1">TITULO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                lorem ipsum
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary">escolha 1</button>
                <button type="button" class="btn btn-primary">escolha 2</button>
            </div>
          </div>
        </div>
    </div>

    <div class="modal fade" id="modal17" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal1">TITULO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                lorem ipsum
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary">escolha 1</button>
                <button type="button" class="btn btn-primary">escolha 2</button>
            </div>
          </div>
        </div>
    </div>

    <div class="modal fade" id="modal18" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal1">TITULO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                lorem ipsum
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" onclick="rollGold(this)" data-gold="8">escolha 1</button>
                <button type="button" class="btn btn-primary">escolha 2</button>
            </div>
          </div>
        </div>
    </div>

    <div class="modal fade" id="modal19" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal1">TITULO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                lorem ipsum
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary">escolha 1</button>
                <button type="button" class="btn btn-primary">escolha 2</button>
            </div>
          </div>
        </div>
    </div>

    <div class="modal fade" id="modal20" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal1">TITULO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                lorem ipsum
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary">escolha 1</button>
                <button type="button" class="btn btn-primary">escolha 2</button>
            </div>
          </div>
        </div>
    </div>

    <div class="modal fade" id="modal21" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal1">TITULO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                lorem ipsum
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary">escolha 1</button>
                <button type="button" class="btn btn-primary">escolha 2</button>
            </div>
          </div>
        </div>
    </div>

    <div class="modal fade" id="modal22" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal1">TITULO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                lorem ipsum
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary">escolha 1</button>
                <button type="button" class="btn btn-primary">escolha 2</button>
            </div>
          </div>
        </div>
    </div>

    <div class="modal fade" id="modal23" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal1">TITULO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                lorem ipsum
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary">escolha 1</button>
                <button type="button" class="btn btn-primary">escolha 2</button>
            </div>
          </div>
        </div>
    </div>

    <div class="modal fade" id="modal24" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal1">TITULO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                lorem ipsum
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary">escolha 1</button>
                <button type="button" class="btn btn-primary">escolha 2</button>
            </div>
          </div>
        </div>
    </div>

    <div class="modal fade" id="modal25" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal1">TITULO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                lorem ipsum
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary">escolha 1</button>
                <button type="button" class="btn btn-primary">escolha 2</button>
            </div>
          </div>
        </div>
    </div>

    <div class="modal fade" id="modal26" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal1">TITULO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                lorem ipsum
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary">escolha 1</button>
                <button type="button" class="btn btn-primary">escolha 2</button>
            </div>
          </div>
        </div>
    </div>

    <div class="modal fade" id="modalBag" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal1">TITULO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Itens que você encontrou:</p>
                <span><ul></ul></span>
                <p>Clique no artefato para usá-lo.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary">escolha 1</button>
                <button type="button" class="btn btn-primary">escolha 2</button>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection
