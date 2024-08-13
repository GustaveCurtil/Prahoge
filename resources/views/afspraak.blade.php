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
            <a href="{{ route('landingspagina') }}">terug naar landingspagina</a>
        </section>

        <main>
            <form action="" method="post">
                <div>
                    <label for="naam">Voor- en achternaam</label>
                    <input type="text" name='naam' id="naam">
                </div>
                <div>
                    <label for="email">Email <b>*</b></label>
                    <input type="email" name="email" id="email" required>
                </div>
                <div>
                    <label for="nummer">Telefoonnummer <b>*</b></label>
                    <input type="tel" name="nummer" id="nummer" required>
                </div>
                <div>
                    <label for="boodschap">Boodschap <b>*</b></label>
                    <textarea name="boodschap" id="boodschap" cols="30" rows="10" required></textarea>
                </div>
                <div>
                    <label for="robot">Hoeveel letters telt P R A H O G E ? <b>*</b></label>
                    <input type="text" name="robot" id="robot">
                </div>
                <div id="verzenden">
                <input type="submit" value="VERZEND">
                </div>
            </form>
        </main>
    
        @include('_partials.footer')
    </div>
</body>
</html>