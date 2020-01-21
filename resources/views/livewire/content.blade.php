<div>
    <table border="1" style="margin-top:10px">
        <tr style="text-align: center">
            <th style="width: 50px;">id</th>
            <th style="width: 100px;">header</th>
            <th>content</th>
        </tr>
        @foreach($contents as $content)
            <tr wire:click="showModal({{$content['id']-1}})">
                <td style="text-align: center">{{$content['id']}}</td>
                <td style="text-align: center">{{$content['header']}}</td>
                <td style="padding: 10px">{{$content['content']}}</td>
            </tr>
        @endforeach
    </table>
        <!-- Modal -->
        <div class="modal fade-in @if($showModal) show @endif" id="exampleModal" tabindex="-1" @if($showModal) style="display: block;padding-right: 15px" @endif role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="false">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" wire:click="closeModal">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {{$modalContent['id']}}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" wire:click="closeModal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    @if($showModal)
        <div class="modal-backdrop fade show"></div>
    @endif
</div>
@push('style')
    <style>
        tr:hover{
            background: #33807f;
            color: #fff;
            cursor: pointer;
        }
    </style>
@endpush
