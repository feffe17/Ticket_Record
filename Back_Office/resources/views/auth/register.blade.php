<form method="POST" action="{{ route('register') }}">
    @csrf

    <div>
        <label for="name">Nome</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}" required 
               pattern="[a-zA-ZÀ-ÿ\s]+" title="Solo lettere e spazi" minlength="2">
        @error('name')
            <p style="color: red;">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="surname">Cognome</label>
        <input type="text" name="surname" id="surname" value="{{ old('surname') }}" required 
               pattern="[a-zA-ZÀ-ÿ\s]+" title="Solo lettere e spazi" minlength="2">
        @error('surname')
            <p style="color: red;">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="phone">Telefono</label>
        <input type="text" name="phone" id="phone" value="{{ old('phone') }}" 
               pattern="[0-9]+" title="Solo numeri" maxlength="15">
        @error('phone')
            <p style="color: red;">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}" required>
        @error('email')
            <p style="color: red;">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required 
               pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}" 
               title="Deve contenere almeno 8 caratteri, una lettera maiuscola, una minuscola, un numero e un carattere speciale" 
               autocomplete="new-password">
        @error('password')
            <p style="color: red;">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="password_confirmation">Conferma Password</label>
        <input type="password" name="password_confirmation" id="password_confirmation" required autocomplete="new-password">
        @error('password_confirmation')
            <p style="color: red;">{{ $message }}</p>
        @enderror
    </div>

    <button type="submit">Registrati</button>
</form>
