<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <!-- INÍCIO DO BANNER -->
    <div class="banner">

        <!-- INÍCIO DO CONTEÚDO -->
        <div class="container">

            <!-- INÍCIO NAVEGAÇÃO-->
            <div class="navbar">
                <div class="logo">
                    <img src="assets/img/logo (1).png" alt="DESPERTARTEC" width="200px">
                </div>

                <!-- INÍCIO MENU NAVEGAÇÃO -->

                <nav>
                    <ul id="MenuItens">
                        <li><a href="index.php" title=""> Início </a></li>
                        <li><a href="produtos.php" title=""> Produtos </a></li>
                        <li><a href="empresa.php" title=""> Empresa </a></li>
                        <li><a href="contato.php" title=""> Entre em Contato </a></li>
                        <li><a href="minha-conta.php" title=""> Fazer Login </a></li>
                    </ul>
                </nav>

                <!-- FIM MENU NAVEGAÇÃO-->
                <a href="carrinho.php" title="">
                <img src="assets/img/carrinho.png" alt="" width="120px" height="120px">
            </a>
            </div>

            <!-- FIM NAVEGAÇÃO-->
</div>
        <!-- FIM DO CONTEÚDO-->
        <hr>
        <br>
    </div>

    <!-- INÍCIO PRODUTOS DETALHES  -->
    <div class="corpo-categorias ver-produto">
        <div class="linha">

            <div class="col-2">
                <a href="ver-produtos3.php" title="">
                <img src="assets/img/combo3.jpg" alt="" id="produtoImg">
            </a>
                        </div>
                        

                        <div class="col-2">
                            <h2>Batata c/Cheddar</h2>
                            <h3>Compre Agora</h3>
                            <h4>R$14,00 </h4>
                            <form action="" method="post">
                                </select>
                                <br>
                                <input type="number" name="" id="" value="1">

                                <button class="btn-adicionar" onclick="adicionarAoCarrinho('Batatas',14.00)">Adicionar ao Carrinho</button>

                            </form>

                            <h3>Descrição:</h3>
                            <p>Batata Frita muito Saborosa </p>
                        </div>

                    </div>
                </div>
        
                <!-- FIM PRODUTOS DETALHES -->

                <!-- INÍCIO TÍTULO PRODUTOS PRODUTOS DETALHES alter 4 incluir esta classe -->
                <div class="corpo-categorias">
                    <div class="linha linha2">
                        <h2>Produtos Relacionados</h2>
                        <a href="produtos.php]"><p>Veja Mais</p>
                        </a>
                    </div>
                </div>
                <!-- FIM TÍTULO PRODUTOS DETALHES -->


                <!-- INÍCIO PRODUTOS EM DESTAQUE alter 2 mudar de todo para produtos relacionados e tirar o combo + comprados-->
                <div class="corpo-categorias">

                    <!-- INÍCIO LINHA CORPO PRODUTOS EM DESTAQUE-->

                    <!-- alter 1.. deixar apenas 1 produto-->
                    <div class="linha">

                        <!-- INÍCIO ITEM PRODUTO-->

                        <div class="col-4">
                            <a href="ver-produtos.php" title="">
                            <img src="assets/img/coxinha3.jpg" alt="">
                        </a>
                            <h4>Coxinha</h4>
                            <div class="classificacao">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                            </div>

                            <p>R$ 7,00</p>


                        </div>

                        <div class="col-4">
                            <a href="ver-produtos2.php" title="">
                            <img src="assets/img/pastel.avif" alt="">
                        </a>
                            <h4>Pastel </h4>
                            <div class="classificacao">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                            </div>
            
                            <p>R$ 10,00</p>
            
                        </div>

                        <div class="col-4">
                            <a href="ver-produto4.php" title="">
                            <img src="assets/img/risoles_de_milho_queijo_thumb02.webp" alt="">
                        </a>
                            <h4>Risole</h4>
                            <div class="classificacao">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                            </div>
            
                            <p>R$ 6,00</p>
            
            
                        </div>

                        <!-- FIM ITEM PRODUTO-->

                        <!-- FIM ITEM PRODUTO-->


                    </div>
                    <!-- FIM LINHA CORPO PRODUTOS EM DESTAQUE-->

                </div>
                <!-- FIM PRODUTOS EM DESTAQUE alter 3 -- retirar paginação -->



                <!-- INÍCIO RODAPÉ-->
                <footer class="rodape">
                    <div class="container">
                        <div class="linha">

                            <div class="rodape-col-1">
                                <h3>Baixe o nosso App</h3>
                                <p>Baixe nosso aplicativo nas melhores plataformas.</p>
                                <div class="app-logo">
                                    <img src="assets/img/google.png" alt="">
                                    <img src="assets/img/apple.png" alt="">
                                </div>
                            </div>

                            <div class="rodape-col-2">
                                <img src="assets/img/logo-2.png" alt="">
                                <p></p>
                            </div>

                            <div class="rodape-col-3">
                                <h3>Mais Informações</h3>
                                <ul>
                                    <li>Cupons </li>
                                    <li>Blog </li>
                                    <li>Política de Privacidade</li>
                                    <li>Contatos</li>
                                </ul>
                            </div>


                            <div class="rodape-col-4">
                                <h3>Redes Sociais</h3>
                                <ul>
                                    <li>Facebook </li>
                                    <li>Instagram </li>
                                    <li>Youtube</li>
                                    <li>Twiter</li>
                                </ul>
                            </div>

                        </div>
                        <hr>
                        <p class="direitos">
                            &#169; Todos os Direitos Reservados. DTEC 2024.
                        </p>

                    </div>

                </footer>
                <!-- FIM RODAPÉ-->

                <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
                <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
                <script src="assets/js/app.js"> </script>
</body>

<script>
        
    function adicionarAoCarrinho(name, price) {
       const precoArredondado = parseFloat(price).toFixed(2);
       const novoPreco = (parseFloat(precoArredondado) ).toFixed(2);
        const pedido = {
            nome: name,
            preco: novoPreco,
        };

        // Armazenar os dados do pedido em localStorage
        let pedidos = JSON.parse(localStorage.getItem('pedidos')) || [];
        pedidos.push(pedido);
        localStorage.setItem('pedidos', JSON.stringify(pedidos));


        // Redirecionar para a página do carrinho
        window.location.href = 'carrinho.php';
    }
    </script>

</html>