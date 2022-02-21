@extends('layout')
@section('content')
    <title>homepagina</title>
    <div class="row">
        <div class="leftcolumn">
            <div class="card-faq">
                <article>
                    <ul>
                        @foreach($posts as $post)
                            <li>{{ $post->questions }}</li>
                        @endforeach
                    </ul>
                    <ul>
                        @foreach($posts as $post)
                            <li>{{ $post->answers }}</li>
                        @endforeach
                    </ul>
                    {{--                    <h1>Veel gestelde vragen</h1>--}}
                    {{--                    <p>1. Hoe print je een document hier op de HZ?</p>--}}
                    {{--                    <br/>--}}
                    {{--                    <p>2. Hoe scan je een document en stuur je dit naar je laptop hier op de HZ?</p>--}}
                    {{--                    <br/>--}}
                    {{--                    <p>3. Wat moet je doen als je ziek bent of symptomen van het corona virus?</p>--}}
                    {{--                    <br/>--}}
                    {{--                    <p>4. Hoe kun je een projectruimte boeken in één van de vleugels van het gebouw?</p>--}}
                    {{--                    <br/>--}}
                    {{--                    <p>5. Wat zijn de instructies om je auto te parkeren op het HZ parkeerterrein?</p>--}}
                    {{--                    <br/>--}}
                    {{--                </article>--}}
                    {{--                <article>--}}
                    {{--                    <h1>Antwoorden</h1>--}}
                    {{--                    <p>1. Printen doe je via de site <a class="button-color" href="https://print.hz.nl/">print.hz.nl</a>.--}}
                    {{--                        Volg--}}
                    {{--                        vervolgens de instructies die op <a class="button-color"--}}
                    {{--                                                            href="https://print.hz.nl/">print.hz.nl</a>--}}
                    {{--                        staan.--}}
                    {{--                    </p>--}}
                    {{--                    <br>--}}
                    {{--                    <p>2. Verbind je PC met de HZ printer die je nodig hebt. Dit doe je bij--}}
                    {{--                        instellingen>apparaten>printers--}}
                    {{--                        &--}}
                    {{--                        scanners>voeg een printer of scanner toe.--}}
                    {{--                        Als dat is gelukt kan je je document scannen en selecteer je daarbij dat het naar je computer--}}
                    {{--                        gestuurd moet--}}
                    {{--                        worden.</p>--}}
                    {{--                    <br>--}}
                    {{--                    <p>3. Als je coronaklachten klachten hebt wordt het sterk aangeraden om zo snel mogelijk een--}}
                    {{--                        afspraak te--}}
                    {{--                        maken--}}
                    {{--                        voor een coronatest. Licht je docenten in over de coronaklachten en zij zorgen ervoor dat de--}}
                    {{--                        lessen--}}
                    {{--                        online--}}
                    {{--                        te volgen zijn in de periode dat jij je corona uitslag afwacht.</p>--}}
                    {{--                    <br>--}}
                    {{--                    <p>4. Als je inlogt op MyHZ kan je via je persoonlijke menu naar je Selfservice Portal. Vanuit je--}}
                    {{--                        Selfservice--}}
                    {{--                        Portal kan je een resevering plaatsen. Vervolgens kies je de tijdspan van je reservering. </p>--}}
                    {{--                    <br>--}}
                    {{--                    <p>5. Gratis parkeren is mogelijk op het parkeerterrein van PZEM aan de Poelendaelesingel 10 in--}}
                    {{--                        Middelburg.--}}
                    {{--                        <br>Dit is op een paar minuten lopen afstand naar de HZ. Het is helaas niet mogelijk om direct--}}
                    {{--                        bij--}}
                    {{--                        het--}}
                    {{--                        HZ-pand--}}
                    {{--                        te parkeren.--}}
                    {{--                        <br>Bij het pand zelf zijn wel twee invalideplaatsen en plekken voor HZ-auto's.--}}
                    {{--                        Let op, parkeer je aan de Poelendaelesingel,<br> dan kun je niet via het tunneltje de HZ--}}
                    {{--                        bereiken--}}
                    {{--                        i.v.m. de--}}
                    {{--                        bouwwerkzaamheden voor het Joint Research Center Zeeland.--}}
                    {{--                        <br>Je kan via het kruispunt bij de stoplichten oversteken.--}}
                    {{--                    </p>--}}
                    <h2>Stel je vragen <a href="/Faq/create" style="color: black">hier</a></h2>
                </article>
            </div>
        </div>
        <div class="rightcolumn-faq">
            <div class="card-faq">
                <img class="hz-logo" src="jpg/hz-logo.jpg" alt="hz logo"
                     style=" width: 200px; position:relative; right: -50px;">
                <ul class="sidebar-style">
                    <li><a class="sidemenu-color"
                           href="https://hz.nl/over-de-hz/regelingen-documenten-1/onderwijs-en-examenregelingen"
                           target="_blank" style="color: black;">HZ onderwijs en examenregelingen</a></li>
                    <br/>
                    <li><a class="sidemenu-color"
                           href="https://hz.nl/uploads/documents/Regelingen/OERS/2021-2022/11.-Uitvoeringsregeling-OER-ICT-Voltijd-2021-2022.pdf"
                           target="_blank" style="color: black;">De HZ HBO-ICT uitvoeringsregeling</a></li>
                    <br/>
                    <li><a class="sidemenu-color" href="https://learn.hz.nl/my/" target="_blank"
                           style="color: black;">HZ learn</a></li>
                    <br/>
                    <li><a class="sidemenu-color"
                           href="https://teams.microsoft.com/dl/launcher/launcher.html?url=%2F_%23%2Fl%2Fteam%2F19%3A827654897ab746089c081f24aff1c984%40thread.skype%2Fconversations%3FgroupId%3D337e8cca-f67d-4132-9fa9-b0c761bbeb94%26tenantId%3D4c16deb3-342d-4fca-bcd5-b1429308034c&type=team&deeplinkId=8ea1dd34-eb9d-4077-be6f-def68a5f907b&directDl=true&msLaunch=true&enableMobilePage=true&suppressPrompt=true"
                           target="_blank" style="color: black;">HBO-ICT teams</a></li>
                    <br/>
                    <li><a class="sidemenu-color" href="https://apps.hz.nl/angular/studievoortgang/login"
                           target="_blank" style="color: black;">Studievoortgang</a></li>
                    <br/>
                    <li><a class="sidemenu-color" href="https://github.com/" target="_blank"
                           style="color: black;">Github</a></li>
                </ul>
            </div>
        </div>
    </div>
    </main>
    </body>

    </html>
@endsection
