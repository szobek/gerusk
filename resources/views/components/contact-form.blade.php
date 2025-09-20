<div class="contact-all">
    <div class="contact-text">
        <p>
            Kontaktujte nás!
        </p>
        <h2>Spojte sa s nami ešte dnes a dozveďte sa viac!</h2>
        <p>
            Máte akékoľvek otázky týkajúce sa obnovy strechy alebo fasády? Sme tu pre vás! Zavolajte nám, napíšte e‑mail
            alebo vyplňte formulár nižšie – náš odborník vás čoskoro kontaktuje.
        </p>
        <hr>
        <p>
            Telefon: +36 30 351 78 71
            E-mail: info@geru-tetok.eu
        </p>
    </div>
    <div class="contact-form">
        @if(!$sended)
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('email.test') }}" method="POST">
                @csrf
                <input type="text" placeholder="Uveďte prosím svoje meno" name="name" id="" value="{{ old('name') }}"
                    class="@error('name') is-invalid @enderror">
                <input type="text" placeholder="Uvedte prosím svoje telefónne číslo" name="telephone" id=""
                    value="{{ old('telephone') }}" class="@error('telephone') is-invalid @enderror">
                <input type="text" placeholder="Uveďte prosím svoju e-mailovú adresu" name="address" id=""
                    value="{{ old('address') }}" class="@error('address') is-invalid @enderror">
                <input type="text" placeholder="Náter na strechu alebo náter na fasádu?" name="type" id=""
                    value="{{ old('type') }}" class="@error('type') is-invalid @enderror">
                <textarea name="message" id="message" placeholder="Prosím, popíšte, s čím vám môžeme pomôcť."
                    class="@error('message') is-invalid @enderror">{{ old('message') ?? '' }}</textarea>

                <button class="submit-form-button">Odoslať</button>
            </form>
        @else
            <p>odoslaný e-mail</p>
            <a href="{{ url('/') }}" class="btn-base">Domov!</a>
        @endif
    </div>

</div>