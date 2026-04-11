alias zzz='ls -la'

function zList(){
    docker ps
}

function zStop() {
    docker stop $(docker ps -q)
}

function zStart() {
    zStop
    docker compose up -d
    zList
}
