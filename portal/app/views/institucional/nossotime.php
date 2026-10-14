<?php 
  include __DIR__ . '/../partials/header.php'; 
  include __DIR__ . '/../partials/menu.php'; 
?>

<!-- Cabeçalho da página Nosso Time -->
<section id="main-banner-page" class="position-relative page-header section-nav-smooth parallax">
    <div class="overlay overlay-dark opacity-8 z-index-1"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="page-titles whitecolor text-center padding_top padding_bottom">
                    <h2 class="font-xlight">Conheça o</h2>
                    <h2 class="font-bold">Nosso Time</h2>
                    <h3 class="font-light pt-2">Fundação Parque Tecnológico da Paraíba</h3>
                </div>
            </div>
        </div>
        <div class="gradient-bg title-wrap">
            <div class="row">
                <div class="col-lg-12 col-md-12 whitecolor">
                    <h3 class="float-start">Nosso Time</h3>
                    <ul class="breadcrumb top10 bottom10 float-end">
                        <li class="breadcrumb-item"><a href="<?= BASE_URL ?>">Home</a></li>
                        <li class="breadcrumb-item">Nosso Time</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="our-team" class="padding_top half-section-alt teams-border">
    <div class="container">
        <!-- Diretoria Executiva Atual -->
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="heading-title wow fadeInUp" data-wow-delay="300ms">
                    <span class="defaultcolor text-center text-md-start">Gestão da Fundação PaqTcPB</span>
                    <h2 class="darkcolor font-normal bottom30 text-center text-md-start">Diretoria Executiva</h2>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <p class="heading_space mt-n3 mt-sm-0 text-center text-md-start">
                    Ao longo dos anos, a instituição tem sido uma espécie de pilar, para dar suporte a projetos e programas do setor de Ciência, Tecnologia e Inovação. Grande parte da sua história de prestígio é fruto dos resultados alcançados na sua atuação e das parcerias firmadas com várias instituições. Suas ações têm se pautado no desenvolvimento de atividades dentro das normas e objetivos propostos, sendo inquestionável sua reputação política e profissional.
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div id="ourteam-slider" class="owl-carousel">
                    <div class="item">
                        <div class="team-box">
                            <div class="image">
                                <img src="<?= BASE_URL ?>assets/img/diretoria/DiretorGeral.jpg" alt="Diretor Geral">
                            </div>
                            <div class="team-content">
                                <h4 class="darkcolor">Diretor Geral</h4>
                                <p>Prof. Dr. Francisco Vilar Brasileiro (UFCG)</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-box">
                            <div class="image">
                                <img src="<?= BASE_URL ?>assets/img/diretoria/DiretoraTecnica_01.jpg" alt="">
                            </div>
                            <div class="team-content">
                                <h4 class="darkcolor">Diretora Adjunta</h4>
                                <p>Prof. Dra. Nadja Maria da Silva Oliveira (UEPB)</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-box single">
                            <div class="image">
                                 <img src="<?= BASE_URL ?>assets/img/diretoria/DiretorAdjunto.jpg" alt="Diretora Adjunta">
                            </div>
                            <div class="team-content">
                                <h4 class="darkcolor">Diretor Técnico</h4>
                                <p>Prof. Dr. Carlos Augusto Couto Xavier (UFCG)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Conselho Diretor -->
        <div class="row top40">
            <div class="col-lg-12 col-md-12">              
                <div class="news_desc text-center text-md-start">
                    <h3 class="text-center font-normal darkcolor"><a href="#"><strong>Conselho Diretor</strong></a></h3><br/>
                    
                    <h4 class="darkcolor font-normal bottom30 text-center text-md-start">
                        O Conselho Diretor constitui o órgão máximo da Fundação PaqTcPB constituído dos membros instituidores, pelos seguintes órgãos participantes:
                    </h4>

                    <ul class="rounded heading_space text-start">
                        <li>Camilo Allyson Simões de Farias - UFCG (Presidente)</li>
                        <li>Célia Regina Diniz - UEPB (Vice-Presidente)</li>
                        <li>Sydney Soares de Toledo - ACCG (Secretário)</li>
                        <li>Terezinha Domiciano Dantas Martins - UFPB</li>
                        <li>Governador Lucas Ribeiro Novais Araújo - Governo do Estado da Paraíba</li>
                        <li>Prefeito Bruno Cunha Lima - PMCG</li>
                        <li>Daniela Leal de Almeida Freire - FIEP/PB</li>
                        <li>João Alberto de Miranda Leite - SEBRAE/PB</li>
                        <li>Rudrigo Otavio Andrade Araujo - BNB</li>
                        <li>Katyusco de Farias Santos - IFPB</li>
                        <li>José Etham de Lucena Barbosa - INSA</li>
                        <li>Alex Bruno Ferreira Marques do Nascimento - PRGAF/UFCG</li>
                        <li>Mário de Sousa Araújo Neto - SEPLAN/UFCG</li>
                        <li>George Rossany Soares de Lira - CEEI/UFCG</li>
                        <li>Marcus Vinicius Lia Fook - CCT/UFCG</li>
                        <li>Vanderlan Francisco da Silva - CH/UFCG</li>
                        <li>Patrícia Hermínio Cunha Feitosa - CTRN/UFCG</li>
                        <li>Ramilton Marinho Costa - CES/UFCG</li>
                        <li>José Fábio Paulino de Moura - CSTR/UFCG</li>
                        <li>Helber Rangel Formiga Leite de Almeida - CCTA/UFCG</li>
                        <li>Hugo Morais de Alcântara - CDSA/UFCG</li>
                    </ul>
                </div>     
            </div>
        </div>

        <!-- Conselho Fiscal -->
        <div class="row top40">
            <div class="col-lg-12 col-md-12">              
                <div class="news_desc text-center text-md-start">
                    <h3 class="text-center font-normal darkcolor"><a href="#"><strong>Conselho Fiscal</strong></a></h3><br/>
                    
                    <ul class="rounded heading_space text-start">
                        <li>Vinicius Rodrigues Vieira Fernandes - UFCG (Titular)</li>
                        <li>Geraldo Medeiros Junior - UEPB (Titular)</li>
                        <li>Célvio Marcos Lima de Carvalho - BNB (Titular)</li>
                        <li>Josias de Souza Leal - PMCG (Suplente)</li>
                        <li>Estélio Pires de Almeida - FIEP/PB (Suplente)</li>
                    </ul>
                </div>     
            </div>
        </div>

        <!-- Histórico das Diretorias Executivas -->
        <div class="row top40">
            <div class="col-lg-12 col-md-12">              
                <div class="news_desc text-center text-md-start">
                    <h3 class="text-center font-normal darkcolor"><a href="#"><strong>Diretoria Executiva (1984-2025)</strong></a></h3><br/>
                    
                    <p class="bottom35">
                        Criada em 1984, entre os quatro primeiros parques tecnológicos do país, a Fundação Parque Tecnológico da Paraíba – Fundação PaqTcPB é uma instituição sem fins lucrativos voltada para o avanço científico e tecnológico do Estado.
                    </p><br/>

                    <h4 class="darkcolor font-normal bottom30 text-center text-md-start">Diretoria Executiva (2018 a 2025)</h4>
                    <ul class="rounded heading_space text-start">
                        <li>Nilton Silva (UFCG) - Diretor Geral</li>
                        <li>Nadja Oliveira (UEPB) - Diretora Técnica</li>
                        <li>Aldre Jorge (UFCG) - Diretor Adjunto (2021 - 2025)</li>
                        <li>Clovis de Melo (UFCG) - Diretor Adjunto (2018 - 2021)</li>
                    </ul>  

                    <h4 class="darkcolor font-normal bottom30 text-center text-md-start">Diretoria Executiva (2015 a 2018)</h4>
                    <ul class="rounded heading_space text-start">
                        <li>Francisco Jaime Bezerra Mendonca Junior (UEPB) – Diretor Geral</li>
                        <li>Paulo de Melo Bastos (UFCG) – Diretor Adjunto</li>
                        <li>Vinicius Farias Moreira (UFCG) – Diretor Técnico</li>
                    </ul>

                    <h4 class="darkcolor font-normal bottom30 text-center text-md-start">Diretoria Executiva (2011 a 2015)</h4>
                    <ul class="rounded heading_space text-start">
                        <li>Francilene Procópio Garcia (UFCG) – Diretora Geral</li>
                        <li>Vicente de Paulo Albuquerque Araújo (UFCG) – Diretor Adjunto</li>
                        <li>Antonio Augusto Pereira de Sousa (UEPB) / Mário César Soares Xavier (UEPB) – Diretor Técnico</li>
                    </ul>

                    <h4 class="darkcolor font-normal bottom30 text-center text-md-start">Diretoria Executiva (2007 a 2011)</h4>
                    <ul class="rounded heading_space text-start">
                        <li>Francilene Procópio Garcia (UFCG) – Diretora Geral</li>
                        <li>Vicente de Paulo Albuquerque Araújo (UFCG) – Diretor Adjunto</li>
                        <li>Maristela Alves de Silva (UEPB) – Diretora Técnica</li>
                    </ul>

                    <h4 class="darkcolor font-normal bottom30 text-center text-md-start">Diretoria Executiva (2003 a 2007)</h4>
                    <ul class="rounded heading_space text-start">
                        <li>Carlos Minor Tomiyoshi (UFCG) – Diretor Geral</li>
                        <li>Maria Helena Marinho do Monte Vilar (SEBRAE) / Marcos Farias de Magalhães (SEBRAE) – Diretor(a) Adjunto(a)</li>
                        <li>Francilene Procópio Garcia (UFCG) – Diretora Técnica</li>
                    </ul>

                    <h4 class="darkcolor font-normal bottom30 text-center text-md-start">Diretoria Executiva (1999 a 2003)</h4>
                    <ul class="rounded heading_space text-start">
                        <li>Carlos Minor Tomiyoshi (UFCG) – Diretor Geral</li>
                        <li>Raimundo Camelo da Silva (SEBRAE) – Diretor Administrativo e Financeiro</li>
                        <li>Derlópidas Gomes Neves Neto (IEL/FIEP) – Diretor Técnico</li>
                    </ul>

                    <h4 class="darkcolor font-normal bottom30 text-center text-md-start">Diretoria Executiva (1995 a 1999)</h4>
                    <ul class="rounded heading_space text-start">
                        <li>Sandoval Farias da Mata (UFCG) – Diretor Geral</li>
                        <li>José Luiz de Souza (UFPB) – Diretor Geral Adjunto</li>
                        <li>Lúcia de Jesus Macedo (SESI/PMCG) – Diretora Administrativa e Financeira</li>
                        <li>Telmo Silva de Araújo (UFCG) / Vicente de Paulo Albuquerque Araújo (UFCG) – Diretor Técnico</li>
                    </ul>

                    <h4 class="darkcolor font-normal bottom30 text-center text-md-start">Diretoria Executiva (1990 a 1995)</h4>
                    <ul class="rounded heading_space text-start">
                        <li>Telmo Silva de Araújo (UFCG) – Diretor Geral</li>
                        <li>José Geraldo de Vasconcelos Baracuhy (UFCG) – Diretor Geral Adjunto</li>
                        <li>Iremar Lopes Maciel (Governo do Estado da Paraíba) – Diretor Administrativo e Financeiro</li>
                        <li>José Luiz de Souza (UFCG) – Diretor Técnico</li>
                    </ul>

                    <h4 class="darkcolor font-normal bottom30 text-center text-md-start">Diretoria Executiva (1986 a 1990)</h4>
                    <ul class="rounded heading_space text-start">
                        <li>Telmo Silva de Araújo (UFCG) – Diretor Geral</li>
                        <li>Luiz Andréa Favero (UFCG) / Maria do Carmo Gomes de Almeida (UFCG) – Diretor(a) Administrativo(a) e Financeiro(a)</li>
                        <li>José Geraldo de Vasconcelos Baracuhy (UFCG) – Diretor Técnico</li>
                    </ul>

                    <h4 class="darkcolor font-normal bottom30 text-center text-md-start">Diretoria Executiva (1984 a 1986)</h4>
                    <ul class="rounded heading_space text-start">
                        <li>José Marques de Almeida Júnior (UFCG) – Diretor Geral</li>
                        <li>Reinaldo Amorim Marques de Almeida (UFCG) – Diretor Administrativo e Financeiro</li>
                        <li>Luiz José de Almeida (UFCG) – Diretor Técnico</li>
                    </ul>
                </div>     
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../partials/footer.php'; ?>