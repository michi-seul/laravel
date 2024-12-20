@extends('layouts.app')

@section('title', 'À propos')

@section('content')
<style>

.about .row{
    display: flex;
    align-items: center;
    gap: 3rem;
    flex-wrap: wrap;
    padding-bottom: 3rem;
}
.about .row .container{
    flex: 1 1 40%;
    position: relative;
    display: flex;
    justify-content: flex-end;
    max-width: 100%;
}
.about .row .container img{
    width: 100%;
    border: 1.5rem solid #fff;
    border-radius: .5rem;
    box-shadow: 0 .5rem 1rem rgba(0,0,0,.1);
    
    object-fit: cover;
}

.about .row .content{
    flex: 2;
    flex: 2 1 50%;
    padding: 1rem;
}
.about .row .content h3 {
    font-size: 2rem; 
    color: #0a0a0a;
    margin-bottom: 1rem;
}
.about .row .content p{
    font-size: 1.5rem;
    color: #333;
    padding: 2rem 0;
    line-height: 1.8;
}
@media (max-width: 768px) {
    .about .row {
        flex-direction: column; 
        text-align: center;
    }
    .about .row .container {
        flex: 1 1 100%; 
        max-width: 100%;
    }
    .about .row .content {
        flex: 1 1 100%;
        margin-top: 1rem;
    }
    .about .row .content h3 {
        font-size: 1.8rem;
    }
    .about .row .content p {
        font-size: 1.2rem; 
    }
}
</style>
   <section class="about" id="about">
    
    <div class="row">
         <div class="container">
             <img src="/images/best2.webp" alt="">
          </div>
     
         <div class="content">
           <h3>Qui sommes-nous ?</h3>
           <p>Victime de chantage ? Vous n'êtes pas seul. Notre équipe d'experts en
              sécurité informatique est spécialisée 
             dans la récupération de données volées et la lutte contre le cyberharcèlement. 
             Forts de plusieurs années d'expérience, nous mettons tout en œuvre pour vous aider
              à reprendre le contrôle de votre vie numérique. Notre priorité absolue ?
              Votre sécurité et votre tranquillité d'esprit. </p>
          </div>
    </div>

</section>
@endsection