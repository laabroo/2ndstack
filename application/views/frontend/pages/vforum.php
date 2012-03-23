<script type="text/javascript">
    $(document).ready(function(){
        $('.list-header li:eq(2)').css({
            "background-color":"#303030"
        });
        $('#banner').html('<h2>Forum</h2>');
    });
</script>
<div class="container content">
    <div class="row">

        <?php $this->load->view('frontend/slide/vslide'); ?>

        <div class="span-one-third">
            <h5>JS-like syntax</h5>
            <p>Opa new default syntax is more similar to JavaScript and other C-like languages, which increases readability and familiarity of the source code. The previous syntax is still available, per community request.</p>
            <h5>
                Enhanced support for
                <a href="http://www.mongodb.org/" target="_blank">MongoDB</a>
            </h5>
            <p>In addition to a full-featured MongoDB driver, Opa S4 optionally provides a high-level, typed syntax to handle database queries and updates in a safe and easy way. This unique typed setting ensures full consistency at compile time between the data model of the application and the requests sent to MongoDB.</p>
        </div>
    </div>
    <hr/>

</div>