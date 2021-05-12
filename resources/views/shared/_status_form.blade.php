<form action="{{ route('statuses.store') }}" method="POST">
    @csrf
    @include('shared._errors')
    <textarea name="content" rows="3" class="form-control" placeholder="聊聊新鲜事儿...">{{ old('content') }}</textarea>
    <div class="text-right">
        <button type="submit" class="btn btn-primary mt-3">发布</button>
    </div>
</form>
