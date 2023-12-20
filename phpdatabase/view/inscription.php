<style>

  p{
    margin-top: 50px;
  }

  .form {
  background-color: #fff;
  display: block;
  padding: 1rem;
  max-width: 350px;
  border-radius: 0.5rem;
  box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
}

.form-title {
  font-size: 1.25rem;
  line-height: 1.75rem;
  font-weight: 600;
  text-align: center;
  color: #000;
}

.input-container {
  position: relative;
  text-align: center;

}

.input-container input, .form button {
  outline: none;
  border: 1px solid #e5e7eb;
  margin: 8px 0;
}

.input-container input {
  background-color: #fff;
  padding: 1rem;
  padding-right: 3rem;
  font-size: 0.875rem;
  line-height: 1.25rem;
  width: 300px;
  border-radius: 0.5rem;
  box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
}

.submit {
  padding-top: 0.75rem;
  padding-bottom: 0.75rem;
  padding-left: 1.25rem;
  padding-right: 1.25rem;
  background-color: #4F46E5;
  color: #ffffff;
  font-size: 0.875rem;
  line-height: 1.25rem;
  font-weight: 500;
  width: 100px;
  border-radius: 0.5rem;
  text-transform: uppercase;
  justify-content: center;
  display: flex;
  margin:auto;
}

.signup-link {
  color: #6B7280;
  font-size: 0.875rem;
  line-height: 1.25rem;
  text-align: center;
}

.signup-link a {
  text-decoration: underline;
}   
  
</style>


<form action="" method="post">

       <p class="form-title">Inscription</p>
        <div class="input-container">
          <input type="text" placeholder="Nom" name="nom">
          <span>
          </span>
      </div>
      <div class="input-container">
          <input type="text" placeholder="Prenom" name="prenom">
          <span>
          </span>
      </div>
      <div class="input-container">
          <input type="text" placeholder="Telephone" name="tel">
          <span>
          </span>
      </div>
      <div class="input-container">
          <input type="email" placeholder="Email" name="email">
          <span>
          </span>
      </div>
      <div class="input-container">
          <input type="password" placeholder="Mot De Passe" name="mdp">
          <span>
          </span>
      </div>

         <button type="submit" class="submit" href="index.php?page=">
       S'inscrire
      </button>

</form>
