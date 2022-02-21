@extends('layout')
@section('content')
    <title>blog</title>
<div class="row">
    <div class="leftcolumn">
        <div class="card">
            @foreach($articles as $article)
                <h2>{{$article->title}}</h2>
                <p>{{$article->body}}</p>
            @endforeach()
              <h2>  <a href="/blog/create" style="color: black">Post een blog</a> </h2>
{{--            <h2>Mijn studiekeuze</h2>--}}
{{--            <p>Ik wil graag HBO-ICT studeren, omdat ik de wereld van IT heel interessant vind. In mijn vrije tijd ben ik--}}
{{--                regelmatig bezig met zowel software als hardware. Ik zou graag mijn kennis willen verrijken en waar kan--}}
{{--                dat--}}
{{--                beter dan op de HZ! ICT neemt tegenwoordig de wereld over. ICT zie je overal terug, dus de vraag naar--}}
{{--                ICT--}}
{{--                neemt ook toe. Genoeg werk aan de winkel dus voor ICT' ers! Ik wil dus graag deze opleiding doen, zodat--}}
{{--                ik in--}}
{{--                de toekomst genoeg werk heb en bezig kan zijn met datgene wat mij werkelijk boeit.</p>--}}
{{--            <h2>SWOT-Analyse</h2>--}}
{{--            <p>Strenghts: Ik ben leergierig. Ik wil dingen niet alleen onthouden maar ook echt begrijpen.--}}
{{--                <br>--}}
{{--                <br>--}}
{{--                Weaknesses: Ik ben soms te leergierig, probeer dingen soms tot de bodem te begrijpen en dat gaat niet--}}
{{--                altijd.--}}
{{--                Als ik een paar dingen achter elkaar niet begrijp heb ik het gevoel dat ik niks begrijp.--}}
{{--                <br>--}}
{{--                <br>--}}
{{--                Opportunities: Dat ik mijn kennis over progammeren in 4 jaar dusdanig heb vergroot dat ik direct op de--}}
{{--                arbeidsmarkt aan de slag kan.--}}
{{--                <br>--}}
{{--                <br>--}}
{{--                threats: Omdat ik alles zo goed mogelijk wil begrijpen ben ik bang dat mijn tempo nu nog iets te laag is--}}
{{--                voor--}}
{{--                het HBO.--}}
{{--                Ik heb nog geen ervaring met programmeren en ben bang dat het in het begin te snel gaat.--}}
{{--            </p>--}}
{{--            <h2>Feedback op de SWOT-Analyse</h2>--}}
{{--            <p>Ik ben helaas geskipt door Daphne en heb geen feedback gekregen :(.</p>--}}
{{--            <h2>Blogposts:</h2>--}}
{{--            <h4> Op 10-09-2021 ben ik op bedrijvensafari geweest! Ik heb verschillende presentaties <br> gevolgd en heb--}}
{{--                een--}}
{{--                field research gedaan naar deze bedrijven? Benieuwd wat mijn <br> bevindingen waren? <a--}}
{{--                    href="blogpost" target="_blank" style="color: black;">klik dan hier</a></h4>--}}
        </div>
    </div>
    <div class="rightcolumn">
        <div class="card">
            <img class="hz-logo" src="jpg/hz-logo.jpg" alt="hz logo"
                 style=" width: 200px; position:relative; right: -50px;">
            <ul class="sidebar-style">
                <li><a class="sidemenu-color"
                       href="https://hz.nl/over-de-hz/regelingen-documenten-1/onderwijs-en-examenregelingen"
                       target="_blank"
                       style="color: black;">HZ onderwijs en examenregelingen</a></li>
                <br/>
                <li><a class="sidemenu-color"
                       href="https://hz.nl/uploads/documents/Regelingen/OERS/2021-2022/11.-Uitvoeringsregeling-OER-ICT-Voltijd-2021-2022.pdf"
                       target="_blank" style="color: black;">De HZ HBO-ICT uitvoeringsregeling</a></li>
                <br/>
                <li><a class="sidemenu-color" href="https://learn.hz.nl/my/" target="_blank" style="color: black;">HZ
                        learn</a></li>
                <br/>
                <li><a class="sidemenu-color"
                       href="https://teams.microsoft.com/dl/launcher/launcher.html?url=%2F_%23%2Fl%2Fteam%2F19%3A827654897ab746089c081f24aff1c984%40thread.skype%2Fconversations%3FgroupId%3D337e8cca-f67d-4132-9fa9-b0c761bbeb94%26tenantId%3D4c16deb3-342d-4fca-bcd5-b1429308034c&type=team&deeplinkId=8ea1dd34-eb9d-4077-be6f-def68a5f907b&directDl=true&msLaunch=true&enableMobilePage=true&suppressPrompt=true"
                       target="_blank" style="color: black;">HBO-ICT teams</a></li>
                <br/>
                <li><a class="sidemenu-color" href="https://apps.hz.nl/angular/studievoortgang/login" target="_blank"
                       style="color: black;">Studievoortgang</a></li>
                <br/>
                <li><a class="sidemenu-color" href="https://github.com/" target="_blank"
                       style="color: black;">Github</a></li>
            </ul>
        </div>
    </div>
</div>
</body>

</html>
@endsection
