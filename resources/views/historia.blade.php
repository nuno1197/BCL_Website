@extends('layout.layout')
@section('content')

    <!-- Banner -->
    <!-- Note: The "styleN" class below should match that of the header element. -->
    <section id="banner" class="style2">
        <div class="inner">
							<span class="image">
								<img src="/app-assets/images/historia.jpg" alt=""/>
							</span>
            <header class="major">
                <h1>A Nossa História.</h1>
            </header>
            <div class="content">
                <p>Est 2011.</p>
            </div>
        </div>
    </section>

    <!-- Main -->
    <div id="main">

        <!-- One -->
        <section id="one">
            <div class="inner">
                <header class="major">
                    <h2>VISÃO, MISSÃO E VALORES</h2>
                </header>
                <p><i class="fas fa-angle-right fill-current" style="color:#F58426;"></i>&nbsp;Ser reconhecido como referência regional na actividade desportiva.</p>
                <p><i class="fas fa-angle-right fill-current" style="color:#F58426;"></i>&nbsp;Produzir jogadores para o mais alto nível competitivo, capazes de integrar as
                    melhores equipas do país, promovendo uma sólida formação, baseada em
                    valores desportivos, pessoais e sociais.</p>
                <p><i class="fas fa-angle-right fill-current" style="color:#F58426;"></i>&nbsp;Competência, Profissionalismo, Espírito de Equipa, Responsabilidade, Ética e
                    Rigor.</p>

            </div>
        </section>

        <!-- Two -->
        <section id="two" class="spotlights">
            <section>
                <a href="generic.html" class="image">
                    <img src="/app-assets/images/jogadoresjovens.jpg" alt="" data-position="center center"/>
                </a>
                <div class="content">
                    <div class="inner">
                        <header class="major">
                            <h3>Fundado a <span style="color:#F58426;">29 de Junho de 2011</span></h3>
                        </header>
                    </div>
                </div>
            </section>
            <section>
                <a href="/historia/palmares" class="image">
                    <img src="/app-assets/images/jogadorasfestejar.jpg" alt="" data-position="top center"/>
                </a>
                <div class="content">
                    <div class="inner">
                        <header class="major">
                            <h3>Palmarés</h3>
                        </header>
                        <p>Prémios do trabalho feito na nossa formação.</p>
                        <ul class="actions">
                            <li><a href="/historia/palmares" class="button next">Ver</a></li>
                        </ul>
                    </div>
                </div>
            </section>
            <section>
                <a target="_blank" rel="noopener noreferrer" href="https://www.visitepontedelima.pt/pt/" class="image">
                    <img src="/app-assets/images/ptl.jpg" alt="" data-position="25% 25%"/>
                </a>
                <div class="content">
                    <div class="inner">
                        <header class="major">
                            <h3>Em <span style="color:#F58426;">Ponte de Lima.</span></h3>
                        </header>

                    </div>
                </div>
            </section>
        </section>

        <!-- Three -->
        <section id="three">
            <div class="inner">
                <header class="major">
                    <h2>Porquê?</h2>
                </header>
                <p><i class="fas fa-angle-right fill-current" style="color:#F58426;"></i>&nbsp;Resposta à necessidade de criar uma associação assente em
                    valores absolutos e cuja principal finalidade é a de servir a
                    comunidade que um conjunto de cidadãos do concelho sentiu.</p>

            </div>
        </section>

    </div>
@endsection
