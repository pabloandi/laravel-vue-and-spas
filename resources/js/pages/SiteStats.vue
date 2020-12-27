<template>
  <div>
    <h1 class="main-title mb-8">Laracasts Stats</h1>

    <ul>
        <li><strong>Total Series: </strong> {{ series }}</li>
        <li><strong>Total Lessons: </strong> {{ lessons }}</li>
    </ul>
  </div>
</template>

<script>

export default {
    data() {
        return {
            series: 0,
            lessons: 0
        }
    },
    created() {
        axios.get('http://192.168.1.15:3000/api/stats').then(({ data }) => {
            this.series = data.series;
            this.lessons = data.lessons;
        });
    },
}
</script>

<style>

</style>
