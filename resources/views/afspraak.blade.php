@include('_partials._head')

<body>
    <div class="pagewrapper nevenpagina">
        @include('_partials.header') 

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
                    <label for="onderwerp">Onderwerp</label>
                    <input type="text" name="onderwerp" id="onderwerp">
                </div>
                <div>
                    <label for="boodschap">Boodschap</label>
                    <textarea name="boodschap" id="boodschap" cols="30" rows="10"></textarea>
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