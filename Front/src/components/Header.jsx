export default function Header() {
    return (
        <>
            <nav class="navbar navbar-expand-lg navbar-light ticket-navbar">
                <div class="container-fluid">
                    <a class="navbar-brand ticket-navbar-brand" href="#">Ticket Records</a>
                    <div class="d-flex">
                        <button id="authButton" class="btn btn-login-logout">Login</button>
                    </div>
                </div>
            </nav>
        </>
    )
}