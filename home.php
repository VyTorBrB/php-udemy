<?php
        <form action="form.php" method="POST">
            <div class="form-group">
                <label for="inputEmail">Digite seu email</label>
                <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                <smal class="form-text text-muted" id="emailHelper">Seu email nao sera divulgado</smal>
            </div>
            
            <div class="form-group">
                <label for="inputPassword">Insira sua senha</label>
                <input type="password" class="form-control" id="inputPassword" placeholder="Senha">
            </div>
            
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="check">
                <label for="check" class="form-check-label">Lembrar senha</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
?>