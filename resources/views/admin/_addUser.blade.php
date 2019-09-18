<!-- Modal -->
<div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="myForm">
                    <input type="text" name="name" id="name" placeholder="name" value="{{ old('name') }}">
                    <input type="email" name="email" id="email" placeholder="Email" value="{{ old('email') }}" autocomplete="email">
                    <input type="password" name="password" id="password" value="$2y$10$RHjGX/ocR/waNX8l1kUGReNn.ylkg7bvbmV7he7d4ERuxPwEAg4Hy" autocomplete="new-password">
                    <button class="btn btn-primary" id="ajaxSubmit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>