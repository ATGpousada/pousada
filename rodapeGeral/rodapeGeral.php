<?php ?>

<footer class="bg-body-tertiary">

    <div class="cor_footer p-4" style="margin-bottom: 30px;">
        <form id="form_oferta">
            <div class="flex">

                <div class="flex-end w25">
                    <i class="bi bi-info-circle mx-3" style="font-size: 50px;"></i>
                    <p class="text_fp mt-2">Deseja receber ofertas? <br> Cadastre seu email Já!</p>
                </div>


                <div class="align-items-center flex-end w30">
                    <input type="text" id="nome" class="form-control input_oferta"  placeholder="Nome" required>
                </div>

                <div class="align-items-center flex-end w30">
                    <input type="email" id="email" class="form-control input_oferta" placeholder="Email" required>
                </div>

                <div class="d-flex align-items-center justify-content-center w15">
                    <button type="submit" value="Enviar" id="botao_oferta" class="btn btn-success p-2 botao_form" style="font-weight: bold; font-size: 20px;">Enviar</button>
                </div>
            </div>
        </form>
    </div>

    <div class="flex-between" style="width: 90%; margin: 0 auto;">


        <div id="logo" class="w33">
            <img src="images/logo/LOGO POUSADA DO SOSSEGO.png" alt="Logo da pousada" class="logo_footer">

            <div id="link" style="margin-top: 50px;">
                <div class=""><a href="">HOME</a></div>
                <div class=""><a href="">SERVIÇOS</a></div>
                <div class=""><a href="">CONTATO</a></div>

                <div id="redes" style="margin-top: 50px;">
                    <i class="fa-brands fa-facebook" style="font-size: 70px;"></i>   
                    <i class="fa-brands fa-instagram" style="font-size: 70px;"></i>
                    <i class="fa-brands fa-whatsapp" style="font-size: 70px;"></i>
                </div>
            </div>
        </div>


        <div id="pagamento" class="w33">
            <p class="text-center texto_footer">Formas de Pagamento</p>
            <img src="images/pagamento.png" alt="formas de pagamento" style="width: 100%; margin-top: 45px;">
        </div>

        <div class="d-flex justify-content-center w33" id="mapa">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.864326064771!2d-44.1671581844165!3d-23.028753248025442!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9c438e8edb483d%3A0x8e9481f17412dc06!2sPousada%20do%20Sossego%20Jacare%C3%AD!5e0!3m2!1spt-BR!2sbr!4v1678816281112!5m2!1spt-BR!2sbr" width="450" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <div class="text-center" id="copy">
        &copy; Todos os Direitos Reservados á Pousada do Sossego - 2023
    </div>

</footer>
