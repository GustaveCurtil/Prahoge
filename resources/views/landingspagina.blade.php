@include('_partials._head')

<body>
    <div class="pagewrapper">
        @include('_partials.header') 
        <address>
            <p>Huisarts Gerda Eggermont</p>
            <p><a href="tel:+3292267062"><b>092267062</b></a></p>
            <p><a href="https://maps.app.goo.gl/f1uRKZNwRBqp3q6f9" target="_blank">Kanariestraat 57, 9032 Gent</a></p>
        </address>

        <section class="afspraak">
            <a href="{{ route('afspraak') }}">AFSPRAAK MAKEN</a>
        </section>

        <main>
            <section class="visie">
                <h3>VISIE</h3>
                <p>Ik ben gepassioneerd en gedreven om mensen te helpen, hierbij geloof ik in een <b>totaalbehandeling</b> van het ziektebeeld en een <b>individuele benadering</b>. 
                    Samen met de patiënt ga ik diepgaand en holistisch op zoek naar de <b>oorzaak van de klachten</b>. 
                    Het doel is steeds om het <b>evenwicht zowel mentaal als fysiek te herstellen, duurzame resultaten te boeken en het zelf herstellend vermogen van de patiënt te stimuleren.</b></p>
                <p>Hierbij bedien ik me van een brede waaier aan pijn- en regulatie <b>therapieën en behandelingsmethodes</b> waaronder:
                    Neuraaltherapie, PRP (bloedplaatjestherapie), Accupunctuur & Biopunctuur & Cupping, Voedings- & Orthomoleculaire advies, Bewegingsadvies & Medisch afslanken, Rookstopbegeleiding</p>
            </section>
            <figure class="mobile">
                <img src="images\gerda kapster Karima .jpg" id="foto" alt="PRAHOGE praktijk voor holistische geneeskunde Dr. Gerda Eggermont in Gent" title="PRAHOGE praktijk voor holistische geneeskunde - Dr. Gerda Eggermont">
            </figure>
            <section class="betekenen">
                <h3>WAT KAN IK VOOR U BETEKENEN?</h3>
                <p>Niet limitatief en ter illustratie enkele klachten die ik als holistisch arts al 22 jaar frequent  behandel:</p>
                <ul>
                    {{-- <li><span class="vet">Sportletsels</span> (tenniselleboog, achillespeesontsteking)</li>
                    <li><span class="vet">Chronische peesontstekingen, hielspoor, spierpijn</span></li> --}}                   
                    <li><span class="vet">Nek- en schouderklachten</span> (spierontsteking, artrose, spierblokkade), <span class="vet">Knie- en lage rugklachten</span></li>
                    <li><span class="vet">Migraine</span></li>
                    <li><span class="vet">Rookstopbegeleiding</span></li>
                    <li><span class="vet">Maag-darmklachten, spijsverteringsklachten, intoleranties</span></li>
                    <li><span class="vet">Auto-immuunziekten</span> (huid-, darm- en schildklierklachten)</li>
                    <li><span class="vet">Gewichtsproblemen</span></li>
                    <li><span class="vet">Burn-out klachten, slaapproblemen en vermoeidheid</span></li>
                    <li><span class="vet">Menopauzeklachten, fertiliteitsproblemen</span></li>
                </ul>
            </section>
            <section class="opleidingen">
                <h3>OPLEIDINGEN</h3>
                <p>Orthomoleculaur arts met brede complementaire opleidingen</p>
                <ul>
                    <li>Algemene geneeskunde, KU Leuven</li>
                    <li>Volksgezondheid en Milieu, Universiteit Gent</li>
                    <li>Orthomoleculaire geneeskunde, VIOW</li>
                    <li>Erkend accupuncturist, JING MING</li>
                    <li>Erkend tabakoloog, KULeuven</li>
                    <li>Homeopathie, Unda, Boiron</li>
                    <li>Sportgeneeskunde : mesotherapie, biopunctuur, cupping, neuraal-pijntherapie,  PRP</li>
                </ul>
            </section>
            <p class="dankzij">Als eerstelijns huisarts is het mijn missie om u te helpen met alle mogelijk denkbare ziektebeelden en klachten. In goede samenwerking met collega-artsen en paramedici (osteopaten, chiropractors, psychologen en verpleegkundigen), begeleid en help ik patiënten op integrale wijze, dat wil zeggen: individuele oorzaken maximaal wegnemen en herval voorkomen. <b>Welkom!</b></p>

        </main>
        <figure class="desktop">
            <img src="images\gerda kapster Karima .jpg" id="foto" alt="PRAHOGE praktijk voor holistische geneeskunde Dr. Gerda Eggermont in Gent" title="PRAHOGE praktijk voor holistische geneeskunde - Dr. Gerda Eggermont">
        </figure>
        @include('_partials.footer')
    </div>

</body>
</html>