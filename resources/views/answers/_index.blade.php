    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h2>{{ $answers_count . " " . Str::plural('Answer', $answers_count) }}</h2>
                    </div>
                    <hr>
                    @include('layouts._messages')
                    @foreach ($answers as $answer)
                    @include('answers._answer')

                    @endforeach
                </div>
            </div>
        </div>
    </div>
