```bash
composer create-project symfony/skeleton:4.1.* lolilol

cd lolilol
mkdir lolilol && cd lolilol


helm create lolilol


minikube start --vm-driver hyperkit

minikube addons enable ingress


echo "$(minikube ip) lolilol.com" | sudo tee -a /etc/hosts


kubectl create namespace lolilol
kns lolilol


helm upgrade -i --namespace lolilol -f infra/app/values.yaml lolilol infra/app

```