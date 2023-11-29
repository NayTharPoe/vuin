<script setup>
defineProps({
  customer: Object
})

</script>

<template>
  <div class="card col-5 offset-3">
    <ul class="list-group list-group-flush">
      <li class="list-group-item">ID - {{ customer.id }}</li>
      <li class="list-group-item">Name - {{ customer.name }} </li>
      <li class="list-group-item">Email - {{ customer.email }}</li>
      <li class="list-group-item">Phone - {{ customer.phone }}</li>
    </ul>
</div>
</template>