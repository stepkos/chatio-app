@extends('layouts.leftMenu')

@section('head')

    <link href="{{ asset('css/chat.css') }}" rel="stylesheet">

@endsection

@section('content')

    <main>

        <section>
            <div class="left">
                <nav>
                    <header>
                        <div style="float: left;">
                            <h1>All Matches</h1>
                        </div>

                        <div style="float: right;">
                            <img src="{{ asset('images/search.svg')}}" alt="lupa">
                        </div>

                        <div style="clear: both;"></div>
                    </header>

                    <div class="person">

                        <div>
                            <img src="{{ asset('images/john.png')}}" alt="profile picture">
                        </div>

                        <div class="info">
                            <h2>Kacper Nowak</h2>
                            <h3>Project Manager</h3>
                        </div>

                        <div class="active"></div>

                    </div>

                    <div class="person">

                        <div>
                            <img src="{{ asset('images/john.jpg')}}" alt="profile picture">
                        </div>

                        <div class="info">
                            <h2>Patryk Okrasa</h2>
                            <h3>Back-End Developer</h3>
                        </div>

                    </div>

                    <div class="person">

                        <div>
                            <img src="{{ asset('images/pitt.jpg')}}" alt="profile picture">
                        </div>

                        <div class="info">
                            <h2>Adam Słowiński</h2>
                            <h3>Marketing Manager</h3>
                        </div>

                    </div>

                </nav>
            </div>
        </section>

        <section>
            <div class="right">

                <header>
                    <div>
                        <img src="{{ asset('images/john.png')}}" alt="profile picture">
                    </div>

                    <div class="info">
                        <h2>Kacper Nowak</h2>
                        <h3>Project Manager</h3>
                    </div>

                    <div class="active"></div>
                </header>

                <div class="chat">

                    <div class="sent">Lorem</div>
                    <div style="clear: both;"></div>

                    <div class="sent">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, quam!</div>
                    <div style="clear: both;"></div>

                    <div class="received">Adipisicing elit</div>
                    <div style="clear: both;"></div>

                    <div class="received">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut explicabo, neque voluptate unde rerum et non reiciendis amet. Quidem, libero.</div>
                    <div style="clear: both;"></div>

                    <div class="sent">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, corporis.</div>
                    <div style="clear: both;"></div>

                    <div class="received">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque maiores soluta saepe excepturi reprehenderit accusamus necessitatibus id praesentium minus eum illum, ea incidunt commodi dolorem quis modi officia beatae asperiores dicta ipsum.</div>
                    <div style="clear: both;"></div>

                    <div class="sent">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus rerum quasi placeat?</div>
                    <div style="clear: both;"></div>

                    <div class="sent">Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
                    <div style="clear: both;"></div>

                    <div class="received">Sit amet</div>
                    <div style="clear: both;"></div>

                    <div class="received">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus ipsam exercitationem expedita magnam veritatis fuga cum debitis consectetur!</div>
                    <div style="clear: both;"></div>

                    <div class="sent">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium aspernatur vitae explicabo architecto molestiae qui quidem pariatur nesciunt laboriosam facere?</div>
                    <div style="clear: both;"></div>

                    <div class="received">Lorem ipsum dolor sit amet consectetur.</div>
                    <div style="clear: both;"></div>

                </div>

                <div class="type">
                    <form method="POST">

                        <div class="fieldSet">

                            <input type="text" name="message">
                            <input type="submit" value="Sent">

                        </div>

                    </form>
                </div>

            </div>
        </section>

        <section style="clear: both;"></section>

    </main>


@endsection
