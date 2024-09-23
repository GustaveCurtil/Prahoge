@include('_partials._head')

<body>
    <div class="pagewrapper nevenpagina">
        @include('_partials.header') 
        <address class="ipad">
            <p>Dr. Gerda Eggermont</p>
            <p><a href="tel:+123456789">022703399</a></p>
            <p><a href="https://maps.app.goo.gl/f1uRKZNwRBqp3q6f9" target="_blank">Kanariestraat 57, 9000 Gent</a></p>
        </address>

        <section class="terug">
            <a href="{{ route('landingspagina') }}">terug naar beginpagina</a>
        </section>

        <main class="patientencheck">
            <div>
                <a href="https://www.mtc-it4.be/patient/index.html#/softlogon/bjNkcWkyQmFRMkpDVTRFNndleFgzQk1ncE1EUkdYZHVtazZlK3RvOUt0dGgwTHp0dVFhSk13dWlPQjdTMWp1TA==" target="_blank">VASTE PATIËNT</a>
                <p>Via deze link kan je je inloggen op de online agenda.</p>
            </div>
            <div>
                <a href="{{ route('afspraak') }}">GEEN VASTE PATIËNT</a>
                <p>Via deze link kan je je aanmelden en zal dokter Eggermont contact met u opnemen.</p>
            </div>
        </main>
    
        @include('_partials.footer')
    </div>
</body>
</html>