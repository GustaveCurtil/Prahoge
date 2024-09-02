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

        <main>
            <form action="{{ route('contact.mail') }}" method="post">
                @csrf
            
                <!-- Name Field -->
                <div>
                    <label for="naam">Voor- en achternaam <b>*</b> @error('naam') <div class="error">({{ $message }})</div> @enderror</label>
                    <input type="text" name="naam" id="naam" value="{{ old('naam') }}">
                </div>
            
                <!-- Email Field -->
                <div>
                    <label for="email">Email <b>*</b> @error('email') <div class="error">({{ $message }})</div> @enderror</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}">
                </div>
            
                <!-- Phone Number Field -->
                <div>
                    <label for="nummer">Telefoonnummer <b>*</b> @error('nummer') <div class="error">({{ $message }})</div> @enderror</label>
                    <input type="tel" name="nummer" id="nummer" value="{{ old('nummer') }}">
                </div>
            
                <!-- Message Field -->
                <div>
                    <label for="boodschap">Boodschap <b>*</b> @error('boodschap') <div class="error">({{ $message }})</div> @enderror</label>
                    <textarea name="boodschap" id="boodschap" cols="30" rows="10">{{ old('boodschap') }}</textarea>
                </div>
            
                <!-- CAPTCHA Field (Optional) -->
                <div>
                    <label for="robot">Hoeveel letters telt P R A H O G E ? <b>*</b> @error('robot') <div class="error">({{ $message }})</div> @enderror</label>
                    <input type="text" name="robot" id="robot">
                </div>
            
                <!-- Submit Button -->
                <div id="verzenden">
                    <input type="submit" value="VERZEND" class="btn btn-primary">
                </div>
            </form>
            
            @if (session('success'))
            <div class="alert alert-success">
            {{ session('success') }}
            </div>
        </main>
@endif
    
        @include('_partials.footer')
    </div>
</body>
</html>