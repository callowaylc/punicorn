
# set port or socket to listen to
$this->listen(1337);

# set number of child processes that will accept/manage
# requests
$this->worker_processes(5);

# set the interval which master will check worker health
$this->health_check_interval(60);