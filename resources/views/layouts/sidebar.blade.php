<div class="side-bar" :class="{visibility: visible}">

    <div class="container border-bottom">
        <div class="row">
            <div class="col py-2">
                <span class="float-sm-right" aria-hidden="true" @click="closeSidebar" style="font-size: 2rem;cursor: pointer;">&times;</span>
            </div>
            <!-- /.col -->
            {{--<button type="button" @click="closeSidebar" class="close" aria-label="Close">--}}
                {{--<span aria-hidden="true" style="font-size: 2rem;">&times;</span>--}}
            {{--</button>--}}
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->

    <div class="container">
        <div class="row">
            <div class="col py-4 pl-3">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item list-group-item-action"><a href="{{ route('articles') }}">Статьи</a></li>
                    <li class="list-group-item list-group-item-action"><a href="{{ route('credit-expert') }}">Кредитный эксперт</a></li>
                    <li class="list-group-item list-group-item-action"><a href="{{ route('chief-financial-officer') }}">Ваш Финансовый директор</a></li>
                    <li class="list-group-item list-group-item-action"><a href="{{ route('cfo-school') }}">Школа Финансового директора</a></li>
                    <li class="list-group-item list-group-item-action"><a href="{{ route('easy-start') }}">Программа "Легкий старт"</a></li>
                    <li class="list-group-item list-group-item-action"><a href="{{ route('business-security') }}">Безопасность бизнеса</a></li>
                    <li class="list-group-item list-group-item-action"><a href="{{ route('personal-banking') }}">Ваш банкир</a></li>
                    <li class="list-group-item list-group-item-action"><a href="{{ route('contacts') }}">Контакты</a></li>
                </ul>
            </div>
            <!-- /.col py-2 -->

        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>
