    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Авторизация</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('user.auth') }}" method="post" id="loginForm">
                        @csrf

                        <x-input :label="'Адрес электронной почты:'" :type="'text'" :name="'email'" :id="'email'"/>

                        <x-input :label="'Пароль:'" :type="'password'" :name="'password'" :id="'password'"/>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                    <button type="submit" class="btn btn-primary" form="loginForm">Войти</button>
                </div>
            </div>
        </div>
    </div>


