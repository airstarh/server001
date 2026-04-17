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

function zSshPhp82(){
    docker exec -it s2_php /bin/bash
}
