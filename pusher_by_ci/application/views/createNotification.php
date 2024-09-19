<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="row justify-content-md-center">
        <div class="col-md-6 mt-4">
            <h4>Create notification</h4>
            <form method="post" action="<?= base_url('notification/notificationAdd')?>">
                <div class="form-group">
                    <label for="exampleInputEmail1">Notitification title</label>
                    <input type="text" class="form-control" name="notification_title" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Notification body</label>
                    <input type="text" class="form-control" name="notification_body" id="exampleInputPassword1">
                </div>
               
                <button type="submit" class="btn btn-primary mt-4">Submit</button>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://js.pusher.com/beams/1.0/push-notifications-cdn.js"></script>
   
    <script>
        const beamsClient = new PusherPushNotifications.Client({
            instanceId: '55c4c2c5-4881-4b86-8e2e-1e80f4baafa8',
            serviceWorkerPath: '/pusher_test/service-worker.js',  // Set the correct path
        });

        beamsClient.start()
            .then(() => beamsClient.addDeviceInterest('hello'))
            .then(() => console.log('Successfully registered and subscribed!'))
            .catch(console.error);
    </script>
</body>
</html>