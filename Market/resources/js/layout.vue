<template>
  <div>
    <div id="wrapper">
      <sidebar-component></sidebar-component>
      <div class="c-wrapper c-fixed-components">
        <header-component></header-component>
        <div class="c-body">
          <main class="c-main">
            <div class="container-fluid">
              <div class="fade-in">
                <transition name>
                  <router-view></router-view>
                </transition>
              </div>
            </div>
          </main>
          <footer class="c-footer">
            <div><a href="https://coreui.io">CoreUI</a> &copy; 2020 creativeLabs.</div>
            <div class="ml-auto">Powered by&nbsp;<a href="https://coreui.io/">CoreUI</a></div>
          </footer>
        </div>
      </div>
    </div>
    
  </div>

</template>

<script>
export default {
  data() {
    return {};
  },
  mounted() {},
};


</script>