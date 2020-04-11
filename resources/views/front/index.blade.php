@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div id="form">
                    <randevuform-component></randevuform-component>
                </div>
            </div>
        </div>
    </div>
    @endsection
<script type="module">
    import RandevuFormComponent from "../../js/components/RandevuFormComponent";

    export default {
        components: {RandevuFormComponent}
    }
</script>