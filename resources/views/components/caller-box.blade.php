<div class="caller-box-section">
    <div class="wrapper">
        <div class="caller-box">
            <div class="caller-box-text">
                <p class="title">Potrebujete poradiť?</p>
                <h2>Zanechajte svoje číslo a čoskoro vám zavoláme späť.</h2>
            </div>
            <div class="caller-box-form">
                <form action="" method="POST">
                    @csrf
                    <input type="text" name="name" placeholder="Uveďte prosím svoje meno" required>
                    <input type="tel" name="telephone" placeholder="Uveďte prosím svoje telefónne číslo" required>
                    <button type="submit">Odoslať</button>
                </form>
            </div>
        </div>
    </div>
</div>