@extends('layouts.app')

@section('title', 'Page d\'accueil')

@section('content')

    <style>
        .home{
    display: flex;
    align-items: center;
    min-height: 70vh;
    background: url(/images/best1.png) no-repeat;
    background-size: cover;
    background-position: center;
}
.home .content{
    max-width: 40rem;
}
.home .content h3{
    font-size: 3rem;
    color: black;
}
.home .content span{
    font-size: 2rem;
    color:#333;
    padding: 1rem 0;
    line-height: 1.5;
}
.home .content p{
    font-size: 1.5rem;
    color:#666;
    padding: 1rem 0;
    line-height: 1.5;
}
@media (max-width:991px) {
    .home{
        background-position:left ;
    }}
    @media (max-width:768px) {
        .home .content h3{
        font-size: 5rem;
    }
    .home .content span{
        font-size: 2.5rem;
    }
    }
    </style>

<section class="home" id="home">
        
    <div class="content">
        <h3>Libérez-vous du chantage</h3>
        <span>Nous sommes là pour vous aider à reprendre le contrôle.</span>
        <p>Vous avez été victime d'une atteinte à votre vie privée ? Nous comprenons votre détresse. 
            Notre équipe est spécialisée dans la récupération de photos volées et vous propose des solutions personnalisées pour vous aider à surmonter cette épreuve.
             Ensemble, retrouvons votre sérénité. Contactez-nous.</p>
        
    </div>
 </section>  
@endsection
