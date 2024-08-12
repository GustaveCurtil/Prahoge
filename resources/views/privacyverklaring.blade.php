@include('_partials._head')

<body>
    <div class="pagewrapper nevenpagina">
        @include('_partials.header') 

        <section class="terug">
            <a href="{{ route('landingspagina') }}">terug naar landingspagina</a>
        </section>

        <main class="privacyverklaring">
            <h3>Privacyverklaring</h3>
            <p>Wij waarderen uw privacy en doen er alles aan om deze te beschermen. Deze privacyverklaring legt uit hoe wij omgaan met uw persoonlijke gegevens wanneer u onze website bezoekt en ons contactformulier invult.</p>
            <h4>1. Verzamelen van persoonsgegevens</h4>
            <p>Wij verzamelen alleen uw e-mailadres: Dit wordt verzameld wanneer u het contactformulier op onze website invult.</p>
            <h4>2. Doeleinden van gegevensverwerking</h4>
            <p>Wij gebruiken uw e-mailadres uitsluitend om te reageren op uw vragen of opmerkingen die via het contactformulier zijn ingediend.</p>
            <h4>3. Wettelijke basis voor gegevensverwerking</h4>
            <p>Wij verwerken uw persoonlijke gegevens op basis van uw toestemming, zoals verstrekt bij het invullen van het contactformulier.</p>
            <h4>4. Bewaartermijnen</h4>
            <p>Wij bewaren uw persoonlijke gegevens zolang als nodig is om aan uw verzoek te voldoen of zoals vereist door de wet.</p>
            <h4>5. Delen van gegevens</h4>
            <p>Wij delen uw persoonlijke gegevens niet met derden, tenzij dit wettelijk verplicht is of noodzakelijk is voor de afhandeling van uw verzoek.</p>
            <h4>6. Uw rechten</h4>
            <p>U heeft het recht om:</p>
            <ul>
               <li>Inzage te krijgen in uw persoonlijke gegevens.</li>
               <li>Correctie te vragen van onjuiste of onvolledige gegevens.</li>
                <li>Verwijdering van uw persoonlijke gegevens te verzoeken.</li>
                <li>Beperking van de verwerking van uw gegevens te vragen.</li>
                <li>Bezwaar te maken tegen de verwerking van uw gegevens.</li>
                <li>Uw toestemming voor gegevensverwerking in te trekken (zonder dat dit de rechtmatigheid van de verwerking op basis van de toestemming vóór de intrekking beïnvloedt).</li>
            </ul>
            <p>Om een van deze rechten uit te oefenen, kunt u contact met ons opnemen.</p>
            <h4>7. Beveiliging van gegevens</h4>
            <p>Wij nemen passende technische en organisatorische maatregelen om uw persoonlijke gegevens te beveiligen tegen verlies of onrechtmatige verwerking.</p>
            
            <p>Als u vragen heeft over deze privacyverklaring of onze gegevensverwerking, neem dan contact met ons op.</p>
        </main>

        @include('_partials.footer')
    </div>
</body>
</html>