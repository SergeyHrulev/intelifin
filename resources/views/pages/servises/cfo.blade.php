@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            {{ Breadcrumbs::render('chief-financial-officer') }}
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
    <div class="container">
        <div class="row text-center">
            <div class="col-sm-12">
                <h1 class="text-center py-4">Ваш Финансовый директор</h1>
            </div>
            <!-- /.col-sm-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <p class="article">Не каждая компания может позволить себе нанять в штат опытного Финансового директора, это достаточно дорого и не доступно малому бизнесу. К тому же не каждый Финансовый директор согласится на Ваше предложение, потому что это достаточно статусная позиция выращиваемая годами, а так же Финансовому директору у Вас может стать скучно, потому что он справится с Вашим объемом задач за несколько часов, а все остальное время будет вынужден придумывать себе задачи.
                Передоверять задачи Главному бухгалтеру – это плохая идея, почему смотрите здесь.
            </p>
        </div>
        <!-- /.row -->
        <div class="row h-100">
            <div class="jumbotron h-100">
                <div class="container h-100">
                    <p class="article">
                        Тем не менее, компания может решить данный вопрос через услугу «аутсорсинг функций финансового директора».
                        В чем ее преимущества для компании:
                    </p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">- ответственность за результат прописывается в договоре,</li>
                        <li class="list-group-item">- стоимость значительно ниже чем у штатного ФинДира,</li>
                        <li class="list-group-item">- в компании больше квалифицированных специалистов из разных областей, которые могут решать более сложные задачи быстрее. Один человек всегда ограничен в знаниях и областях,</li>
                        <li class="list-group-item">- возможность привлекать других сторонних специалистов, не тратя на это время и силы</li>
                    </ul>
                </div>
                <!-- /.container h-100 -->
            </div>
            <!-- /.jumbotron h-100 -->
        </div>
        <!-- /.row h-100 -->
        <div class="row">
            <div class="col-12 py-3"></div>
            <!-- /.col-12 py-3 -->
        </div>
        <!-- /.row -->
        <div class="row min-h-screen">
            <div class="jumbotron min-h-screen">
                <div class="container min-h-screen">
                    <p class="article">
                        Что это дает собственникам компании:
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">- своевременно выявить проблемы в бизнесе,</li>
                        <li class="list-group-item">- определить реальные цели собственника бизнеса и сформировать финансовую политику компании соответствующую этим целям,</li>
                        <li class="list-group-item">- определить убыточные направления бизнеса,</li>
                        <li class="list-group-item">- оценить перспективные проекты,</li>
                        <li class="list-group-item">- разработать оптимальную дивидендную политику, удовлетворяющую потребностям собственников, но не ущемляющую и не дающую разрушить бизнес,</li>
                    </ul>
                    </p>
                    <!-- /.article -->
                </div>
                <!-- /.container -->
            </div>
        </div>
        <!-- /.row -->
        <div class="row h-100">
            <div class="jumbotron h-100">
                <div class="container h-100">
                    <h1 class="display-4">Функции, входящие в услугу:</h1>
                    <p class="lead"></p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">казначейство. Управление денежным потоком и другими высоко ликвидными активами (ценные бумаги, векселя),</li>
                        <li class="list-group-item">управленческий учет,</li>
                        <li class="list-group-item">финансовое планирование,</li>
                        <li class="list-group-item">управление кредитным портфелем,</li>
                        <li class="list-group-item">налоговое планирование,</li>
                        <li class="list-group-item">бизнес-планирование,</li>
                        <li class="list-group-item">расчет и анализ текущих и новых проектов,</li>
                        <li class="list-group-item">управление себестоимостью. Калькуляция, АВС анализ, оценка прибыльности отдельных продуктов и групп продуктов,</li>
                    </ul>
                    <!-- /.list-group list-group-flush -->
                    <!-- /.lead -->
                    <!-- /.display-4 -->
                    <p class="article pt-5">
                        Если у вас есть потребность в создании финансовой службы, но нет возможности нанять Финансового директора, или вы не знаете как его оценить - мы возьмем на себя его функции. Также, проведем проверки по безопасности и финансовым рискам.
                    </p>
                    <!-- /.article -->
                </div>
                <!-- /.container h-100 -->
            </div>
            <!-- /.jumbotron h-100 -->
        </div>
        <!-- /.row h-100 -->
    </div>
    <!-- /.container -->

    <!-- /.min-h-screen bg-grey-darker p-8 -->
@stop