<form method="POST" action="javascript:void(0)" id="updateprofileform">
    <?php echo csrf_field(); ?>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label class="">Fullname</label>
            <input type="text" class="form-control " value="<?php echo e(Auth::user()->name); ?>" name="name">
        </div>
        <div class="form-group col-md-6">
            <label class="">Email Address</label>
            <input type="email" class="form-control " value="<?php echo e(Auth::user()->email); ?>" name="email" readonly>
        </div>
        <div class="form-group col-md-6">
            <label class="">Phone Number</label>
            <input type="text" class="form-control " value="<?php echo e(Auth::user()->phone); ?>" name="phone">
        </div>
        <div class="form-group col-md-6">
            <label class="">Date of Birth</label>
            <input type="date" value="<?php echo e(Auth::user()->dob); ?>" class="form-control " name="dob">
        </div>
        <div class="form-group col-md-6">
            <label class="">Country</label>
            <input type="text" value="<?php echo e(Auth::user()->country); ?>" class="form-control " name="country" readonly>
        </div>
        <div class="form-group col-md-6">
            <label class="">Address</label>
            <textarea class="form-control " placeholder="Full Address" name="address" row="3"><?php echo e(Auth::user()->address); ?></textarea>
        </div>

    </div>
    <button type="submit" class="btn btn-primary">Update Profile</button>
</form>

<script>
    document.getElementById('updateprofileform').addEventListener('submit', function() {
        //alert('love');
        $.ajax({
            url: "<?php echo e(route('profile.update')); ?>",
            type: 'POST',
            data: $('#updateprofileform').serialize(),
            success: function(response) {
                if (response.status === 200) {
                    $.notify({
                        // options
                        icon: 'flaticon-alarm-1',
                        title: 'Success',
                        message: response.success,
                    }, {
                        // settings
                        type: 'success',
                        allow_dismiss: true,
                        newest_on_top: false,
                        showProgressbar: true,
                        placement: {
                            from: "top",
                            align: "right"
                        },
                        offset: 20,
                        spacing: 10,
                        z_index: 1031,
                        delay: 5000,
                        timer: 1000,
                        url_target: '_blank',
                        mouse_over: null,
                        animate: {
                            enter: 'animated fadeInDown',
                            exit: 'animated fadeOutUp'
                        },

                    });
                } else {

                }
            },
            error: function(data) {
                console.log(data);
            },

        });
    });
</script>
<?php /**PATH /home/nb9pvggwxcwi/public_html/ultra.multipagos.co/core/resources/views/purpose/profile/update-profile-information-form.blade.php ENDPATH**/ ?>