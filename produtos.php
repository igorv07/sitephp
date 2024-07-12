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

         <div class="produto">
            <h1 class="titulo">Todos os Produtos</h1>



            <!--INÍCIO LINHA CORPO PRODUTOS DESTAQUES-->
            <div class="linha">

                <div class="col-4">
                    <img src="assets/img/coxinha3.jpg" alt="" width="500px">
    
                    <h4>Coxinha Frango</h4>
                    <div class="classificacao">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                    </div>
    
                    <p>R$ 4,00</p>
                    <button class="btn-adicionar" onclick="adicionarAoCarrinho('Coxinha',4.00)">Adicionar ao Carrinho</button>
                </div>
                
                <div class="col-4">
                    <img src="assets/img/pastel.avif" alt="" width="500px">
    
                    <h4>Pastel Sabores/...</h4>
                    <div class="classificacao">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                    </div>
    
                    <p>R$ 10,00</p>
                    <button class="btn-adicionar" onclick="adicionarAoCarrinho('Pastel',10.00)">Adicionar ao Carrinho</button>
                </div>
                <div class="col-4">
                    <img src="assets/img/kibe1.jpg" alt="">
    
                    <h4>Kibe</h4>
                    <div class="classificacao">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                    </div>
    
                    <p>R$ 3,00</p>
                    <button class="btn-adicionar" onclick="adicionarAoCarrinho('Kibe',3.00)">Adicionar ao Carrinho</button>
                </div>

                <div class="col-4">
                    <img src="assets/img/risoles_de_milho_queijo_thumb02.webp" alt="">
    
                    <h4>Risole</h4>
                    <div class="classificacao">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                    </div>
    
                    <p>R$ 4,00</p>
                    <button class="btn-adicionar" onclick="adicionarAoCarrinho('risole',4.00)">Adicionar ao Carrinho</button>
                </div>
            </div>


            <!--SEGUNDA COLUNA DOS PRODUTOS-->
                <div class="linha">

                <div class="col-4">
                        <a href= "bolinhodecarne.php"><img src="assets/img/bolinho.jpg" alt="" height= 280px></a>  
            
                        <h4>Bolinho de carne</h4>
                        <div class="classificacao">
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                        </div>
            
                        <p>R$ 4,00</p>
                        <button class="btn-adicionar" onclick="adicionarAoCarrinho('Bolinho de Carne',4.00)">Adicionar ao Carrinho</button>
                    </div>


                    
                    <div class="col-4">
                        <img src="assets/img/esfiha.jpg" alt="">
            
                        <h4>Esfiha</h4>
                        <div class="classificacao">
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                        </div>
            
                        <p>R$ 4,00</p>
                        <button class="btn-adicionar" onclick="adicionarAoCarrinho('Esfiha',4.00)">Adicionar ao Carrinho</button>
                    </div>
                    <div class="col-4">
                        <img src="assets/img/batata.jpg" alt="" height= 280px>
            
                        <h4>Batata c/Cheddar</h4>
                        <div class="classificacao">
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                        </div>
            
                        <p>R$ 14,00</p>
                        <button class="btn-adicionar" onclick="adicionarAoCarrinho('Batatas',14.00)">Adicionar ao Carrinho</button>
                    </div>
            
                    </div>
                </div>
            </div>
                <!--FIM DAS COLUNAD PRODUTOS-->

                    <footer class="rodape-3">
                        <div class="container">
                            <div class="linha">
                
                                <div class="rodape-col-6">
                                    <h3>Baixe o nosso App</h3>
                                    <p>Baixe nosso aplicativo nas melhores plataformas.</p>
                                    <div class="app-logo">
                                        <img src="assets/img/google.png" alt="">
                                        <img src="assets/img/apple.png" alt="">
                                    </div>
                                </div>
                
                                <div class="rodape-col-6">
                                    <img src="assets/img/logo-2.png" alt="">
                                    <p></p>
                                </div>
                
                                <div class="rodape-col-7">
                                    <h3>Mais Informações</h3>
                                    <ul>
                                        <li>Cupons </li>
                                        <li>Blog </li>
                                        <li>Política de Privacidade</li>
                                        <li>Contatos</li>
                                    </ul>
                                </div>
                
                
                                <div class="rodape-col-8">
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
                    <script src="assets/js/login.js"> </script>
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